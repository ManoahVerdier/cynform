<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Categorie;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (Schema::hasTable('formations')) {
            $categories = Categorie::distinct('nom')
                ->orderBy('nom', 'ASC')
                ->get();
            /*$conseils_header = Conseil::distinct('certification')
                ->orderBy('certification', 'ASC')
                ->get();
            $hp = Homepage::first();*/

            View::share('categories', $categories);
            /*View::share('conseils_header', $conseils_header);
            View::share('hp', $hp);*/
        }
    }
}
