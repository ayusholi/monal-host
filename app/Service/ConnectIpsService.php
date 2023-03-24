<?php

namespace App\Service;

class ConnectIpsService
{
    public static function generateHash($string)
    {
        //Try to locate certificate file

        if (!$cert_store = file_get_contents(public_path('connectips/') . env('CONNECT_IPS_CERTIFICATE_FILENAME') )) {
            echo "Error: Unable to read the cert file\n";
            exit;
        }
        // Try to read certificate file
        if (openssl_pkcs12_read($cert_store, $cert_info, env('CONNECT_IPS_CERTIFICATE_PASSWORD'))) {
            if ($private_key = openssl_pkey_get_private($cert_info['pkey'])) {
                $array = openssl_pkey_get_details($private_key);
            }
        } else {
            echo "Error: Unable to read the cert store.\n";
            exit;
        }
        $hash = "";
        if (openssl_sign($string, $signature, $private_key, "sha256WithRSAEncryption")) {
            $hash = base64_encode($signature);
            // openssl_free_key($private_key);
        } else {
            echo "Error: Unable openssl_sign";
            exit;
        }

        return $hash;
    }


}
