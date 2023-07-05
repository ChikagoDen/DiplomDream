<?php

namespace App\Providers;

use App\Models\biblioteca_tabl;
use Illuminate\Support\ServiceProvider;

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
        $listDreamBooks=biblioteca_tabl::get(); 
        view()->share('listDreamBooks',  $listDreamBooks);
    }
}
