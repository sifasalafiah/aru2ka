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
        Blade::component('coda-base', 'Codakarta\Aru2ka\Components\Layouts\Base');
        Blade::component('coda-app', 'Codakarta\Aru2ka\Components\Layouts\App');
        Blade::component('coda-guest', 'Codakarta\Aru2ka\Components\Layouts\Guest');
        Blade::component('coda-button', 'Codakarta\Aru2ka\Components\Ui\Button');
        Blade::component('coda-panel', 'Codakarta\Aru2ka\Components\Ui\Panel');
        Blade::component('coda-icon', 'Codakarta\Aru2ka\Components\Ui\Icon');
        Blade::component('coda-backlink', 'Codakarta\Aru2ka\Components\Ui\Backlink');
        Blade::component('coda-breadcumb', 'Codakarta\Aru2ka\Components\Ui\Breadcumb');
        Blade::component('coda-cards', 'Codakarta\Aru2ka\Components\Ui\Cards');
        Blade::component('coda-card', 'Codakarta\Aru2ka\Components\Ui\Card');
        Blade::component('coda-card-footer', 'Codakarta\Aru2ka\Components\Ui\CardFooter');
        Blade::component('coda-link-button', 'Codakarta\Aru2ka\Components\Ui\Link');
        Blade::component('coda-label', 'Codakarta\Aru2ka\Components\Ui\label');
        Blade::component('coda-tab', 'Codakarta\Aru2ka\Components\Ui\Tab');
        Blade::component('coda-tab-content', 'Codakarta\Aru2ka\Components\Ui\TabContent');
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