<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    function get($url, $auth_token = null, $app_token = null)
    {
        $client = new Client();
        $response = $client->get($url, [
            'headers' => [
                'Authorization' => $auth_token == null ? "" : $auth_token,
                'app-token' => $app_token == null ? "" : $app_token
            ]
        ]);
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    function post($url, $data = [], $auth_token = null, $app_token = null, $customHeader = array())
    {
        $client = new Client();
        if (count($customHeader) !== 0) {
            $header = [
                'Authorization' => $auth_token == null ? "" : $auth_token,
                'app-token' => $app_token == null ? "" : $app_token
            ];
            $headers = array_merge($header, $customHeader);
            $response = $client->post($url, [
                'form_params' => $data,
                'headers' => $headers
            ]);
        } else {
            $response = $client->post($url, [
                'form_params' => $data,
                'headers' => [
                    'Authorization' => $auth_token == null ? "" : $auth_token,
                    'app-token' => $app_token == null ? "" : $app_token
                ]
            ]);
        }
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    function put($url, $data = [], $auth_token = null, $app_token = null, $customHeader = array())
    {
        $client = new Client();
        if (count($customHeader) !== 0) {
            $header = [
                'Authorization' => $auth_token == null ? "" : $auth_token,
                'app-token' => $app_token == null ? "" : $app_token
            ];
            $headers = array_merge($header, $customHeader);
            $response = $client->put($url, [
                'form_params' => $data,
                'headers' => $headers
            ]);
        } else {
            $response = $client->put($url, [
                'form_params' => $data,
                'headers' => [
                    'Authorization' => $auth_token == null ? "" : $auth_token,
                    'app-token' => $app_token == null ? "" : $app_token
                ]
            ]);
        }
        $result = json_decode($response->getBody(), true);
        return $result;
    }

    function delete($url, $data = [], $auth_token = null, $app_token = null, $customHeader = array())
    {
        $client = new Client();
        if (count($customHeader) !== 0) {
            $header = [
                'Authorization' => $auth_token == null ? "" : $auth_token,
                'app-token' => $app_token == null ? "" : $app_token
            ];
            $headers = array_merge($header, $customHeader);
            $response = $client->delete($url, [
                'form_params' => $data,
                'headers' => $headers
            ]);
        } else {
            $response = $client->delete($url, [
                'form_params' => $data,
                'headers' => [
                    'Authorization' => $auth_token == null ? "" : $auth_token,
                    'app-token' => $app_token == null ? "" : $app_token
                ]
            ]);
        }
        $result = json_decode($response->getBody(), true);
        return $result;
    }
}
