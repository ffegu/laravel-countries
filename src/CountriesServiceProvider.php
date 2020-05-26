<?php 

namespace Pranpegu\LaravelCountries;

use Illuminate\Support\ServiceProvider;

class CountriesServiceProvider extends ServiceProvider 
{

    public function boot()
    {
        
    }

    public function register()
    {
         $this->app->singleton(Countries::class, function(){
                return new Countries();
         });
    }
}