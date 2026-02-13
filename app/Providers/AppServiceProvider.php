<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CompanyInformation;

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
        $company_information = CompanyInformation::first();
        view()->share('company_information', $company_information);
    }
}
