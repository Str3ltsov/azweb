<?php

namespace App\Providers;

use App\Services\ContactService;
use App\Services\PageService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (config('app.env') == 'production')
            $this->app->bind('path.public', fn () => base_path('htdocs'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(PageService $pService, ContactService $cService): void
    {
        if (config('app.env') == 'production')
            URL::forceScheme('https');

        if (!str_contains(url()->current(), 'admin')) {
            View::composer('*', function ($view) use ($pService, $cService) {
                $view->with([
                    'pages' => $pService->getPages(),
                    'contacts' => $cService->getContacts()
                ]);
            });
        }
    }
}
