<?php

use Illuminate\Support\Str;

return [
    /*
    |--------------------------------------------------------------------------
    | Administrator Account
    |--------------------------------------------------------------------------
    */

    'admin_name' => env('ADMIN_NAME', 'Administrator'),
    'admin_username' => env('ADMIN_USERNAME', 'admin'),
    'admin_email' => env('ADMIN_EMAIL', 'admin@email.com'),
    'admin_password' => env('ADMIN_PASSWORD', Str::random(8)),

];
