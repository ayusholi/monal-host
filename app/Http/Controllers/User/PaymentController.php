<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\Payment;
use App\Models\Service;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Service\ImePayService;
use App\Models\OperatingSystem;
use App\Service\ConnectIpsService;
use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    /**
     * Initiate Connect IPS Payment
     */
    public function connectIps(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'service_id' => 'required|exists:services,id',
        ]);
        $user = Auth::user();
        $amount = $request->amount;
        $transaction_method = "connect_ips";

        $service = Service::findOrFail($request->service_id);
        $operating_system = OperatingSystem::findOrFail($request->operating_system_id);

        $user_service = UserService::create([
            'user_id' => $user->id,
            'service_id' => $service->id,
            'operating_system_id' => $operating_system->id,
        ]);

        $merchant_id = env('CONNECT_IPS_MERCHANT_ID');
        $app_id = env('CONNECT_IPS_APP_ID');
        $app_name = env('CONNECT_IPS_APP_NAME');
        $transaction_id =  "C_IPS-" . rand(10000000, 99999990);
        $transaction_date = date('d-m-Y');
        $transaction_currency = "NPR";
        // Convert the Amount to Paisa as the amount we send to Connect IPS will be in paisa
        $transaction_amount = $amount * 100;
        $reference_id = $transaction_id;
        $remarks = "Remarks";
        $particulars = "Particulars";
        $token_string = "MERCHANTID=" . env('CONNECT_IPS_MERCHANT_ID') . ",APPID=" . env('CONNECT_IPS_APP_ID') . ",APPNAME=" . env('CONNECT_IPS_APP_NAME') . ",TXNID=" . $transaction_id . ",TXNDATE=" . $transaction_date . ",TXNCRNCY=" . $transaction_currency . ",TXNAMT=" . $transaction_amount . ",REFERENCEID=" . $reference_id . ",REMARKS=" . $remarks . ",PARTICULARS=" . $particulars . ",TOKEN=TOKEN";

        $hash_token = ConnectIpsService::generateHash($token_string);

        $create_payment = Payment::create([
            'transaction_method' => Payment::$TRANSACTION_METHOD['CONNECT_IPS'],
            'user_id' => $user->id,
            'payment_amount' => $amount,
            'user_service_id' => $user_service->id,
            'tax_percent' => 0,
            'tax_amount' => 0,
            'total_amount' => $amount,
            'remarks' => $remarks,
            'transaction_reference' => $reference_id,
            'transaction_currency' => $transaction_currency,
            'transaction_date' => Carbon::now(),
            'transaction_id' => $transaction_id,
            'status' => Payment::$STATUS['PENDING'],
        ]);

        $form_data = [
            'MERCHANTID' => $merchant_id,
            'APPID' => $app_id,
            'APPNAME' => $app_name,
            'TXNID' => $transaction_id,
            'TXNDATE' => $transaction_date,
            'TXNCRNCY' => $transaction_currency,
            'TXNAMT' => $transaction_amount,
            'REFERENCEID' => $reference_id,
            'REMARKS' => $remarks,
            'PARTICULARS' => $particulars,
            'TOKEN' => $hash_token
        ];

        $connect_ips_url = env('CONNECT_IPS_GATEWAY_URL');
        $response = Http::post($connect_ips_url, $form_data);
    }

    public function imePayPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'service_id' => 'required|exists:services,id',
        ]);
        $user = Auth::user();
        $amount = $request->amount;

        $service = Service::findOrFail($request->service_id);
        $operating_system = OperatingSystem::findOrFail(1);
        $region = Region::findOrFail(1);

        $user_service = UserService::create([
            'user_id' => $user->id,
            'service_id' => $service->id,
            'operating_system_id' => $operating_system->id,
            'region_id' => $region->id,
            'status' => UserService::$STATUS['PROCESSING']
        ]);
        $transaction_id = "IME-" . rand(1000000, 9999999);
        $transaction_currency = "NPR";
        $remarks = "Remarks";
        $imePayService = new ImePayService();
        $response = $imePayService->getToken($amount, $transaction_id);

        if($response->ok() == true) {
            $response_json = $response->json();
            $token_id = $response_json["TokenId"];
            Payment::create([
                'transaction_method' => Payment::$TRANSACTION_METHOD['IME_PAY'],
                'user_id' => $user->id,
                'payment_amount' => $amount,
                'user_service_id' => $user_service->id,
                'tax_percent' => 0,
                'tax_amount' => 0,
                'total_amount' => $amount,
                'remarks' => $remarks,
                'transaction_reference' => $transaction_id,
                'transaction_currency' => $transaction_currency,
                'transaction_date' => Carbon::now(),
                'transaction_id' => $transaction_id,
                'status' => Payment::$STATUS['PENDING'],
            ]);
            $checkout_url = env('IME_PAY_CHECKOUT_URL');
            $data = [
                "url" => env('IME_PAY_CHECKOUT_URL'),
                "merchant_code" => env('IME_PAY_MERCHANT_CODE'),
                "ref_id" => $transaction_id,
                "method" => "GET",
                "response_url" => route('imepay.success'),
                "amount" => number_format(str_pad($amount, 6, '0', STR_PAD_LEFT), 2),
                "cancel_url" => route('imepay.failed'),
                "token_id" => $token_id,
                "service" => $service,
                "amount" => $amount,
                "request_method" => "POST",
                "checkout_url" => $checkout_url,
            ];

            return view('service.imepay_confirmation')->with($data);
        }
    }

    public function imePaySuccess(Request $request)
    {
        $response_code = $request->ResponseCode;

        if($response_code == 0) {
            $transaction_id = $request->TransactionId;
            $reference_code = $request->RefId;
            $msisdn = $request->Msisdn;
            $token_id = $request->TokenId;
            $imePayService = new ImePayService();
            $response = $imePayService->verifyToken($reference_code, $token_id, $transaction_id, $msisdn);
            if($response["ResponseCode"] == 0) {
                $payment = Payment::where('transaction_id', $reference_code)->first();
                if($payment->status == Payment::$STATUS['PENDING']) {
                    $payment->update([
                        'status' => Payment::$STATUS['SUCCESSFUL']
                    ]);

                }
            }
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('home');
        }
    }

    public function imePayFailed(Request $request)
    {
        $response_code = $request->ResponseCode;
        $transaction_id = $request->RefId;
        $payment = Payment::where('transaction_id', $transaction_id)->first();

        if($response_code == 1) {
            $payment->update([
                'status' => Payment::$STATUS['CANCELLED']
            ]);
        } else {
            $payment->update([
                'status' => Payment::$STATUS['FAILED']
            ]);
        }
        return redirect()->route('home');

    }

}
