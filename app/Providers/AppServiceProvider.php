<?php

namespace App\Providers;

use App\Models\Peserta;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Filament\Support\View\Components\Modal;

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
        Modal::closedByClickingAway(false);
        Paginator::useBootstrapFive();


    }
}
