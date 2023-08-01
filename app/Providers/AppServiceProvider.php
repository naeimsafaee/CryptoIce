<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     * @return void
     */
    public function register(){

    }

    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot(){


       /* Blade::directive('svg', function($arguments){
            // Funky madness to accept multiple arguments into the directive


            $svg = ${$arguments};

            return "<?php echo $svg; ?>";
            // Create the dom document as per the other answers
            $svg = new \DOMDocument();
            $svg->load(public_path($arguments));
            $output = $svg->saveXML($svg->documentElement);

            return $output;
        });*/
    }
}
