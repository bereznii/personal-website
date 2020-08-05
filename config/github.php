<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Credentials used for github api authentication.
    |--------------------------------------------------------------------------
    |
    | @link(https://developer.github.com/v3/#oauth2-keysecret)
    |
    */

    'clientId' => env('GITHUB_CLIENT_ID', ''),
    'clientSecret' => env('GITHUB_CLIENT_SECRET', '')
];
