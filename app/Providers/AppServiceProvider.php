<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      //開發環境時載入的套件          
      $this->app->bind(
      'Gvb\Whoops\ServiceProvider::class',
      'Barryvdh\Debugbar\ServiceProvider::class'
      );
      if($this->app->environment() == 'local'){ // .env設定
        $this->app->register('Gvb\Whoops\ServiceProvider');
        $this->app->register('Barryvdh\Debugbar\ServiceProvider');
      }
    }
}
