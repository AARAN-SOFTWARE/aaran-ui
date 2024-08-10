<?php

namespace Codexsun\AaranUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class AaranUIServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'aaranUI');

        $this->configureComponents();

    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {

            $this->registerComponent('alerts.notification');

            $this->registerComponent('assets.logo.cx-logo');

            $this->registerInput();

        });
    }


    #region[Input]
    protected function registerInput(): void
    {
        $this->registerComponent('input.text');
    }
    #endregion[Input]

    #region[RegisterComponent]
    protected function registerComponent($component)
    {
        Blade::component('aaranUI::components.' . $component, 'aaran-' . $component);
    }
    #endregion
}
