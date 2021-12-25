<?php

namespace Codakarta\Aru2ka;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Codakarta\Aru2ka\Components\Layouts\Base;

class ArunikaServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(dirname(__DIR__,1).'/resources/views', 'arunika');
        $this->publishes([
            dirname(__DIR__,1).'/public' => public_path('vendor/aru2ka'),
        ], 'public');
        Blade::component('coda-base', Base::class);
        // Blade::component('coda-base', 'App\View\Components\Layout\Base');
        // Blade::component('coda-app', 'App\View\Components\Layout\App');
        // Blade::component('coda-guest', 'App\View\Components\Layout\Guest');
        // Blade::component('coda-button', 'App\View\Components\Ui\Button');
        // Blade::component('coda-panel', 'App\View\Components\Ui\Panel');
        // Blade::component('coda-icon', 'App\View\Components\Ui\Icon');
        // Blade::component('coda-backlink', 'App\View\Components\Ui\Backlink');
        // Blade::component('coda-breadcumb', 'App\View\Components\Ui\Breadcumb');
        // Blade::component('coda-cards', 'App\View\Components\Ui\Cards');
        // Blade::component('coda-card', 'App\View\Components\Ui\Card');
        // Blade::component('coda-card-footer', 'App\View\Components\Ui\CardFooter');
        // Blade::component('coda-link-button', 'App\View\Components\Ui\Link');
        // Blade::component('coda-label', 'App\View\Components\Ui\label');
        // Blade::component('coda-tab', 'App\View\Components\Ui\Tab');
        // Blade::component('coda-tab-content', 'App\View\Components\Ui\TabContent');
    }
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__,1).'/config/arunika/asset.php',
            'arunika.asset'
        );
        $this->mergeConfigFrom(
            dirname(__DIR__,1).'/config/arunika/platform.php',
            'arunika.platform'
        );
        $this->mergeConfigFrom(
            dirname(__DIR__,1).'/config/arunika/ui.php',
            'arunika.ui'
        );
    }
}
?>