<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CredentialsMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    /**
     * Get all the customers
     */
    public function getCustomers()
    {
        $customers = User::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function getCustomerDetail($customer_id)
    {
        $customer = User::findOrFail($customer_id);
        $customerservices = UserService::where('user_id', $customer_id)->get();
        return view('admin.customers.detail', compact('customer', 'customerservices'));
    }


    public function getCustomerServices($customer_id)
    {
        $user = Auth::user();
        $services = UserService::where('user_id', $user->id)->get();
        return view('admin.customers.services', compact('services'));
    }


    public function getProcessingServices()
    {
        $services = UserService::where('status', UserService::$STATUS['PROCESSING'])->get();

        return view('admin.customers.processing_services', compact('services'));
    }

    public function getUserServiceDetail($customer_id, $user_service_id)
    {
        $customer = User::findOrFail($customer_id);
        $user_service = UserService::findOrFail($user_service_id);

        if($user_service->user_id != $customer_id) abort(404);

        return view('admin.customers.service_detail', compact('user_service', 'customer'));

    }

    public function getUserServiceCredential($customer_id, $user_service_id)
    {
        $customer = User::findOrFail($customer_id);
        $user_service = UserService::findOrFail($user_service_id);

        if($user_service->user_id != $customer_id) abort(404);

        return view('admin.customers.service_credential', compact('user_service', 'customer'));

    }

    public function postUserServiceCredential(Request $request, $customer_id, $user_service_id)
    {
        $customer = User::findOrFail($customer_id);
        $user_service = UserService::findOrFail($user_service_id);

        if($user_service->user_id != $customer->id) abort(404);

        $credentials = $request->credentials;
        $data = [
            'credentials' => $credentials
        ];
        if($user_service->status == "on_process") {
            $data['status'] = UserService::$STATUS['SUCCESSFUL'];
            $data['start_from'] = Carbon::now()->toDateTimeString();
            if($user_service->service->interval_type == ("month" || "Month")) {
                $data['expires_at'] = Carbon::now()->addMonths($user_service->service->interval)->toDateTimeString();
            } else if($user_service->service->interval_type == ("year" || "Year")) {
                $data['expires_at'] = Carbon::now()->addYears($user_service->service->interval)->toDateTimeString();
            }
        }
        $user_service->update($data);
        Mail::to($customer)->send(new CredentialsMail($user_service->service, $customer, $credentials));
        return redirect()->route('admin.service.detail', ['customer_id' => $customer->id, 'user_service_id' => $user_service->id]);
    }
}
