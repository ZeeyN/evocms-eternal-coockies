<?php

namespace EvolutionCMS\ZeeyN\EternalCookies\plugins;

use EvolutionCMS;
use Event;

Event::listen(
    'evolution.OnPageNotFound',
    function () {
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            $http_origin = $_SERVER['HTTP_ORIGIN'];
            header("Access-Control-Allow-Origin: $http_origin");
            header("Access-Control-Allow-Credentials: true");
            header('Access-Control-Allow-Methods: OPTIONS, GET, PUT, POST, DELETE');
            header(
                "Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control, access-token, refresh-token"
            );
            die('done');
        }
        $http_origin = $_SERVER['HTTP_ORIGIN'];
        header("Access-Control-Allow-Origin: $http_origin");
        header("Access-Control-Allow-Credentials: true");
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header(
            "Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control, access-token, refresh-token"
        );

        if (isset($_GET['q'])) {
            $request['request'] = $_REQUEST;
            $q                  = $request['request']['q'];
            unset($request['request']['q']);

            $routes = [
                'api/v1/ec/s' => [
                    'EvolutionCMS\ZeeyN\EternalCookies\EternalCookiesCore',
                    'successUser',
                ],

            ];

            if (array_key_exists($q, $routes)) {
                call_user_func_array([new $routes[$q][0](), $routes[$q][1]], $request);
            }
        }
    }
);
