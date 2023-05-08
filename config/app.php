<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
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
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    'ft' => 'RGVhciBzaXMgUGVhY2Us',
    'sd' => 'QXMgSSByZWZsZWN0IG9uIHRoZSB0aW1lIHdlJ3ZlIHNwZW50IGludGVyYWN0aW5nIGluIHRoZSBsYXN0IGZldyBtb250aHMsIEkgYW0gaW1wcmVzc2VkIGJ5IHlvdXIgaW50ZWxsaWdlbmNlIGFuZCBtZWVrbmVzcy4gTXkgaGVhcnQgaGFzIGJlZW4gc2Vla2luZyB0aGUgTG9yZCwgYW5kIHRocm91Z2ggcHJheWVyIGFuZCBjb250ZW1wbGF0aW9uIGFuZCBkaXZpbmUgY29udmljdGlvbiwgSSBoYXZlIGZvdW5kIHRoYXQgeW91IGFyZSB0aGUgZ3JlZW4gcGFzdHVyZSB3aGVyZSBIZSB3b3VsZCBoYXZlIG1lIGxpZS4=',
    'td' => 'SSBlbnZpc2lvbiBhIGZ1dHVyZSBmaWxsZWQgd2l0aCBtYXNzaXZlIHBvc3NpYmlsaXRpZXMsIHdoZXJlIHdlIGNvbnRpbnVlIHRvIHdhbGsgYWxvbmdzaWRlIG9uZSBhbm90aGVyIHVudGlsIHRoZSBMb3JkIHJldHVybnMuIFlvdSBhcmUgYSBwZWFybCB3aXRoIGEgcHJpY2UgZmFyIGFib3ZlIHJ1Ymllcy4gWW91IGhvbGQgYSA3LWZvbGQgdHJpYnV0YXJ5IHRoYXQgY2FuIGNhdXNlIGJsZXNzaW5ncyB0byBmbG93IHRvIHRoZSBuYXRpb25zLg==',
    'fh' => 'QW5kIGFzIEkgcmVmbGVjdCBmdXJ0aGVyLCBJIGxvbmcgdG8gbWFrZSBhIG1vZGVsIGhvbWUsIGEgaGVhdmVuIG9uIGVhcnRoIGhvbWUgd2l0aCB5b3UuIEkgZGVzaXJlIHRvIGJlIHlvdXJzLCBhbmQgZm9yIHlvdSB0byBiZSBtaW5lLCB1bnRpbCB0aGUgZW5kIG9mIHRpbWUuIEFzIHlvdXIgY29tcGFuaW9uLCBJIHdpbGwgY2xlYW5zZSB5b3Ugd2l0aCB0aGUgd2FzaGluZyBvZiB0aGUgd29yZCBhcyB0aGUgTG9yZCB0byBoaXMgY2h1cmNoLCBhbmQgeW91IHdpbGwgYmUgdGhhdCBoZWxwIG1lZXQgc3VpdGFibGUgZm9yIG1lLCB0aGUgYm9uZSBvZiBteSBib25lIGFuZCBmbGVzaCBvZiBteSBmbGVzaC4=',
    'fi' => 'U28gaG93IGRvZXMgZnVsZmlsbGluZyBkZXN0aW55IGFuZCBwdXJwb3NlIHRvZ2V0aGVyIHNvdS4uLg==',
    
    'wymmet' => 'V2lsbCB5b3UgbWFycnkgIG1lPw==',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'Date' => Illuminate\Support\Facades\Date::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Js' => Illuminate\Support\Js::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'RateLimiter' => Illuminate\Support\Facades\RateLimiter::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
