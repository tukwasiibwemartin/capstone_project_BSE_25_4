<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Telescope\Telescope;

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
        // Allow authenticated users to access Telescope
        Telescope::auth(function ($request) {
            return auth()->check();
        });

        // Ensure required storage directories exist in serverless environments
        // On Vercel, storage is in /tmp which gets recreated on each invocation
        $this->ensureStorageDirectoriesExist();
    }

    /**
     * Ensure necessary storage directories exist.
     */
    protected function ensureStorageDirectoriesExist(): void
    {
        $directories = [
            storage_path('app/public'),
            storage_path('app/private'),
            storage_path('framework/cache'),
            storage_path('framework/sessions'),
            storage_path('framework/views'),
            storage_path('logs'),
        ];

        foreach ($directories as $directory) {
            if (!is_dir($directory)) {
                @mkdir($directory, 0755, true);
            }
        }
    }
}
