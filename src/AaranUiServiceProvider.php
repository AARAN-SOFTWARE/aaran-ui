<?php

namespace Codexsun\AaranUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\ServiceProvider;

class AaranUiServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'aaranUi');

        $this->configureComponents();

    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {

            $this->registerComponent('alerts.flash');

            $this->registerComponent('icons.icon');
            $this->registerComponent('logo.cxlogo');

            $this->registerComponent('forms.lists.index-master');

            $this->registerComponent('table.lists.index-master');
        });
    }

    protected function registerComponent($component)
    {
        Blade::component('aaranUi::components.'.$component, 'aaran-'.$component);
    }
}