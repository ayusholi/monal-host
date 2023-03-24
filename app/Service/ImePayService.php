<?php

namespace App\Service;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Laravel\Ui\Presets\React;

class ImePayService
{
    /**
     * Ime Payment Create Token
     * @param $amount
     */
    public function getToken($amount, $reference_id)
    {
        $url = env('IME_PAY_TOKEN_URL');
        $body = [
            "MerchantCode" => env('IME_PAY_MERCHANT_CODE'),
            "Amount" => $amount,
            "RefId" => $reference_id
        ];
        $module = base64_encode(env('IME_PAY_MERCHANT_MODULE'));
        $response = Http::withHeaders([
            'Module' => $module,
        ])->withBasicAuth(env('IME_PAY_MERCHANT_USERNAME'), env('IME_PAY_MERCHANT_PASSWORD'))->post($url, $body);
        return $response;
    }

    /**
     * Ime Payment Confirmation
     * @param $token_id
     * @param $transaction_id
     * @param $msisdn
     */
    public function verifyToken($reference_id, $token_id, $transaction_id, $msisdn)
    {
        $url = env('IME_PAY_VERIFY_URL');

        $body = [
            "MerchantCode" => env('IME_PAY_MERCHANT_CODE'),
            "RefId" => $reference_id,
            "TokenId" => $token_id,
            "TransactionId" => $transaction_id,
            "Msisdn" => $msisdn
        ];
        $module = base64_encode(env('IME_PAY_MERCHANT_MODULE'));

        $response = Http::withHeaders([
            'Module' => $module,
        ])->withBasicAuth(env('IME_PAY_MERCHANT_USERNAME'), env('IME_PAY_MERCHANT_PASSWORD'))->post($url, $body);
        return $response->json();
    }
}
