<?php

namespace App\Providers;

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
        \Blade::if('Actived', function($user) {
            // “auth” es el sistema de autenticación que estamos utilizando
                // y “check” nos dice si el usuario está o no autentificado
            if($user->actived == 0){
                return false;
            }
            else{
                return true;
            }
    });
}

}
