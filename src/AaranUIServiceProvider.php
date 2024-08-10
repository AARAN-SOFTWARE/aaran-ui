<?php

namespace Codexsun\aaranUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\ServiceProvider;

class AaranUIServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'aaranUI');

        $this->configureComponents();

    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {

//            $this->registerComponent('alerts.flash');

        });
    }

    protected function registerComponent($component)
    {
        Blade::component('aaranUI::components.'.$component, 'aaran-'.$component);
    }
}
