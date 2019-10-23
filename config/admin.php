<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Turn Off Admin Login
    |--------------------------------------------------------------------------
    |
    | After creating another multi auth apart from admin, and you don't want to have admin
    | backend then you can simply turn if off by makeing admin_active as false here.
    |
 */
    'admin_active' => true,

    /*
    |--------------------------------------------------------------------------
    | Validations
    |--------------------------------------------------------------------------
    |
    | Apply your own validations for new columns of Admin registration.
    |
 */
    'admin' => [
        'validations' => [
            // Write rules here
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    |
    | Use prefix to before the routes of multi auth package.
    | This way you can keep your admin page secure.
    | Default : admin
    */
    'prefix' => 'admin',
     
    /*
    |--------------------------------------------------------------------------
    | Registration Notification Email
    |--------------------------------------------------------------------------
    |
    | While registering new admin by superadmin, you can send an email to
    | the new registered admin with the password you have selected
    | If you make it 'true' then it will send email otherwise
    | It will not going to send any email to the admin
    | Default : false
    */
    'registration_notification_email' => false,
];