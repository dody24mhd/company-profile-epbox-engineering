<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Company Information
    |--------------------------------------------------------------------------
    |
    | Social media URLs and company contact information for SEO and structured data
    |
    */

    'company_phone' => env('COMPANY_PHONE', '+65 8282 9835'),
    'company_phone_alt' => env('COMPANY_PHONE_ALT', '+62 811 7008 8989'),
    'company_email' => env('COMPANY_EMAIL', 'sales@epbox-engg.com'),
    'company_address' => env('COMPANY_ADDRESS', 'Singapore'),
    'company_street' => env('COMPANY_STREET', '1 Sunview Road Eco-Tech@Sunview'),
    'company_postal' => env('COMPANY_POSTAL', '627615'),
    'company_address_batam' => env('COMPANY_ADDRESS_BATAM', 'Warna Jaya Business Park blok A1-06, Batam, Kepulauan Riau'),

    'facebook_url' => env('FACEBOOK_URL', ''),
    'linkedin_url' => env('LINKEDIN_URL', 'https://www.linkedin.com/company/epbox-engineering'),
    'twitter_url' => env('TWITTER_URL', ''),
    'instagram_url' => env('INSTAGRAM_URL', ''),
    'youtube_url' => env('YOUTUBE_URL', ''),

    /*
    |--------------------------------------------------------------------------
    | Google Search Console Verification
    |--------------------------------------------------------------------------
    |
    | This value is used for Google Search Console website verification.
    | Get the verification code from Google Search Console and add it to .env:
    | GOOGLE_SEARCH_CONSOLE_VERIFICATION=your_verification_code_here
    |
    */

    'google_search_console_verification' => env('GOOGLE_SEARCH_CONSOLE_VERIFICATION', ''),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'UTC'),

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),

    'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],

];
