<?php

use Laravel\Fortify\Features;

return [

    'guard' => 'web',
 
    'passwords' => 'users',

    'username' => 'email',

    'home' => '/create/article',
    
    'prefix' => '',

    /*
    *--------------------------------------------------------------------------
    * Domain
    *--------------------------------------------------------------------------
    *
    * This value controls the domain for all of the routes that are
    * registered by Fortify.
    *
    */

    'domain' => null,

    /*
    *--------------------------------------------------------------------------
    * Route Middleware
    *--------------------------------------------------------------------------
    *
    * Here you may specify the middleware Fortify will assign to the routes
    * that it registers.
    *
    */

    'middleware' => ['web'],

    /*
    *--------------------------------------------------------------------------
    * Rate Limiting
    *--------------------------------------------------------------------------
    *
    * By default, Fortify will throttle requests to the login and password
    * reset routes. You may specify the name of the rate limiter that
    * should be used for these actions.
    *
    */

    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],

    /*
    *--------------------------------------------------------------------------
    * Features
    *--------------------------------------------------------------------------
    *
    * Some of the features provided by Fortify are optional. You may disable
    * features by removing them from this array.
    *
    */

    'features' => [
        Features::registration(),
        Features::resetPasswords(),
        // Features::emailVerification(),
        Features::updateProfileInformation(),
        Features::updatePasswords(),
        Features::twoFactorAuthentication([
            'confirm' => true,
            'confirmPassword' => true,
            // 'window' => 0,
        ]),
    ],

];