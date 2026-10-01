<?php

if(!function_exists('generateRazorpayOrder')){
    function generateRazorpayOrder($data){
        $headers = [
            "Content-Type" => "application/json",
            "accept" => "application/json",
            "Authorization" => "Basic " . base64_encode(config('constant.RAZOR_KEY_ID') . ':' . config('constant.RAZOR_KEY_SECRET'))
        ];

        $response = commanCurlCall("https://api.razorpay.com/v1/orders", 'POST', $data, $headers);
        return json_decode(json_encode($response['response'] ?? null));
    }
}
