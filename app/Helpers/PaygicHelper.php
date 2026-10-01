<?php

use Illuminate\Support\Facades\Log;

    if(!function_exists('createMerchantToken')) {
        function createMerchantToken()
        {
            $auth = array(
                'mid' => config('constant.PAYGIC_MERCHANT_ID'),
                'password' => config('constant.PAYGIC_PASSWORD')
            );

            $headers = [
                "accept" => "application/json",
                "Content-Type" => "application/json",
            ];

            $response = commanCurlCall(
                "https://server.paygic.in/api/v2/createMerchantToken",
                'POST',
                $auth,
                $headers
            );
            return $response['response'] ?? null;

        }
    }

    if(!function_exists('createPaymentPage')) {
        function createPaymentPage($data, $token)
        {

            $headers = [
                "Content-Type" => "application/json",
                "token" => $token,
            ];

            $response = commanCurlCall(
                "https://server.paygic.in/api/v2/createPaymentPage",
                'POST',
                $data,
                $headers
            );
            return json_encode($response['response'] ?? null);

        }
    }

    if(!function_exists('checkPaymentStatus')) {
        function checkPaymentStatus($orderid, $token){

            $data = array(
                'mid' => config('constant.PAYGIC_MERCHANT_ID'),
                'merchantReferenceId' =>$orderid
            );
            $headers = [
                "Content-Type" => "application/json",
                "token" => $token,
            ];

            $response = commanCurlCall(
                "https://server.paygic.in/api/v2/checkPaymentStatus",
                'POST',
                $data,
                $headers
            );
            return json_encode($response['response'] ?? null);
        }
    }
