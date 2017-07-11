<?php

namespace DependenCI\Logos;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DependenCILogosServiceProvider extends ServiceProvider
{
    protected $logo;

    public function __construct()
    {
        $this->logo = new LogoProvider;
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade::directive('dependenciHorizontal', function ($expression) {
            return $this->logo->dependenciHorizontal();
        });
        Blade::directive('dependenciHorizontalWhite', function ($expression) {
            return $this->logo->dependenciHorizontalWhite();
        });
        Blade::directive('dependenciIcon', function ($expression) {
            return $this->logo->dependenciIcon();
        });
        Blade::directive('dependenciVertical', function ($expression) {
            return $this->logo->dependenciVertical();
        });
        Blade::directive('dependenciVerticalWhite', function ($expression) {
            return $this->logo->dependenciVerticalWhite();
        });
    }
}
