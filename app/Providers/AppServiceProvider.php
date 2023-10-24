<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // social link and footer contact information
        $socialData = json_decode(file_get_contents(storage_path('data/social.json')));
        $contactData = json_decode(file_get_contents(storage_path('data/contact.json')));

        View::share('socialData', $socialData);
        View::share('contactData', $contactData);
    }
}
