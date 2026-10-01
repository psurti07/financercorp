<?php

use Illuminate\Support\Facades\Log;

    if(!function_exists('user_track')){
        function user_track($postData){
            $map = [
                // Self product tags → Self key
                'Self Get Offer'          => config('constant.SELF_INTERAKT_KEY'),
                'Self Payment Successful' => config('constant.SELF_INTERAKT_KEY'),
            
                // Hire product tags → Hire key
                'Hire Get Offer'          => config('constant.HIRE_INTERAKT_KEY'),
                'Hire Payment Successful' => config('constant.HIRE_INTERAKT_KEY'),

                 // Webinar product tags → Webinar  key
                'Lead Gen'     => config('constant.WEBINAR_INTERAKT_KEY'),
                'Payment Successful' => config('constant.WEBINAR_INTERAKT_KEY'),
            ];

            $tag = $postData['tags'][0] ?? null; // safely get first tag
            $key = $map[$tag] ?? null;
            $headers = [
                "Authorization" => "Basic " . $key,
                "Content-Type" => "application/json"
            ];

            Log::info('Interakt request', [
                'type' => 'user_track',
                'url' => 'https://api.interakt.ai/v1/public/track/users/',
                'request' => $postData,
            ]);
            $response = commanCurlCall(
                "https://api.interakt.ai/v1/public/track/users/",
                'POST',
                $postData,
                $headers
            );
            Log::info('Interakt response', [
                'type' => 'user_track',
                'response' => $response,
            ]);
            return $response['response'] ?? null;
        }
    }

    if(!function_exists('event_track')){
        function event_track($postData){
            $arr = $map = [
                'Self Get Offer'            => config('constant.SELF_INTERAKT_KEY'),
                'Self Payment Successful'    => config('constant.SELF_INTERAKT_KEY'),
                'Self Payment Failed'        => config('constant.SELF_INTERAKT_KEY'),
                
                'Hire Get Offer'            => config('constant.HIRE_INTERAKT_KEY'),
                'Hire Payment Successful'    => config('constant.HIRE_INTERAKT_KEY'),
                'Hire Payment Failed'        => config('constant.HIRE_INTERAKT_KEY'),

                'Lead Gen'                  => config('constant.WEBINAR_INTERAKT_KEY'),
                'Payment Successful'        => config('constant.WEBINAR_INTERAKT_KEY'),
                'Payment Failed'            => config('constant.WEBINAR_INTERAKT_KEY'),
            ];
            
            $event = $postData['event'] ?? null; // safely get first tag
            $key = $map[$event] ?? null;
                        
            $headers = [
                "Authorization" => "Basic " . $key,
                "Content-Type" => "application/json"
            ];

            Log::info('Interakt request', [
                'type' => 'event_track',
                'url' => 'https://api.interakt.ai/v1/public/track/events/',
                'request' => $postData,
            ]);
            $response = commanCurlCall(
                "https://api.interakt.ai/v1/public/track/events/",
                'POST',
                $postData,
                $headers
            );
            Log::info('Interakt response', [
                'type' => 'event_track',
                'response' => $response,
            ]);
            return $response['response'] ?? null;
        }
    }
    
    if(!function_exists('interakt_message')){
        function interakt_message($type, $postData, $key){
            /*Log::info($type);
            Log::info(json_encode($postData));
            Log::info($key);*/
            
            //$key = ($type == 'self') ? config('constant.SELF_INTERAKT_KEY') : config('constant.HIRE_INTERAKT_KEY');
            $headers = [
                "Authorization" => "Basic " . $key,
                "Content-Type" => "application/json"
            ];

            Log::info('Interakt request', [
                'type' => 'message',
                'channel' => $type,
                'url' => 'https://api.interakt.ai/v1/public/message/',
                'request' => $postData,
            ]);
            $response = commanCurlCall(
                "https://api.interakt.ai/v1/public/message/",
                'POST',
                $postData,
                $headers
            );
            Log::info('Interakt response', [
                'type' => 'message',
                'channel' => $type,
                'response' => $response,
            ]);

            return json_encode($response['response'] ?? null);
        }

    }
