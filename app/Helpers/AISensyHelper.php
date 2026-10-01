<?php


    if(!function_exists('aisensy_track')){
        function aisensy_track($postData){
            $headers = [
                "Content-Type" => "application/json"
            ];

            $response = commanCurlCall(
                "https://backend.aisensy.com/campaign/t1/api/v2",
                'POST',
                $postData,
                $headers
            );

            return $response['response'] ?? null;
        }
    }