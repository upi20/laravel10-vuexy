<?php

namespace App\Providers;

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
        // // get all data from menu.json file
        // $verticalMenuJson = file_get_contents(storage_path('app/menu-data/verticalMenu.json'));
        // $verticalMenuData = json_decode($verticalMenuJson);
        // $horizontalMenuJson = file_get_contents(storage_path('app/menu-data/horizontalMenu.json'));
        // $horizontalMenuData = json_decode($horizontalMenuJson);

        // // Share all menuData to all the views
        // view()->share('menuData', [$verticalMenuData, $horizontalMenuData]);
    }
}
