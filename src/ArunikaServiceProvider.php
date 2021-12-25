<?php

namespace Codakarta\Aru2ka;

use Illuminate\Support\ServiceProvider;
use Codakarta\Aru2ka\Commands\InstallCommand;
use Codakarta\Aru2ka\Components\Layouts\Base;
use Codakarta\Aru2ka\Components\Layouts\App;
use Codakarta\Aru2ka\Components\Layouts\Guest;
use Codakarta\Aru2ka\Components\Ui\Button;
use Codakarta\Aru2ka\Components\Ui\Panel;
use Codakarta\Aru2ka\Components\Ui\Icon;
use Codakarta\Aru2ka\Components\Ui\Backlink;
use Codakarta\Aru2ka\Components\Ui\Breadcumb;
use Codakarta\Aru2ka\Components\Ui\Cards;
use Codakarta\Aru2ka\Components\Ui\Card;
use Codakarta\Aru2ka\Components\Ui\CardFooter;
use Codakarta\Aru2ka\Components\Ui\Link;
use Codakarta\Aru2ka\Components\Ui\Label;
use Codakarta\Aru2ka\Components\Ui\Tab;
use Codakarta\Aru2ka\Components\Ui\TabContent;


class ArunikaServiceProvider extends ServiceProvider {

    protected $commands = [
        InstallCommand::class,
    ];

    public function boot()
    {
        $this
        ->bootViews()
        ->bootAsset()
        ->bootRoutes()
        ->bootComponents()
        ->bootConfigs();
        $this->commands($this->commands);
    }

    protected function bootViews(): self
    {
        $this->loadViewsFrom(dirname(__DIR__,1).'/resources/views', 'aru2ka');
        $this->publishes([
            dirname(__DIR__,1).'/resources/views' => resource_path('views/vendor/aru2ka'),
        ], 'aru2ka-views');

        return $this;
    }

    protected function bootAsset(): self
    {
        $this->publishes([
            dirname(__DIR__,1).'/public' => public_path('vendor/aru2ka'),
        ], 'aru2ka-styles');

        return $this;
    }

    protected function bootComponents():self{
        $this->loadViewComponentsAs('coda', [
            Base::class,
            App::class,
            Guest::class,
            Button::class,
            Panel::class,
            Icon::class,
            Backlink::class,
            Breadcumb::class,
            Cards::class,
            Card::class,
            CardFooter::class,
            Link::class,
            Label::class,
            Tab::class,
            TabContent::class,
        ]);

        return $this;
    }

    protected function bootConfigs(): self
    {
        $this->publishes([
            dirname(__DIR__,1).'/config/arunika/asset.php' => config_path('asset.php'),
            dirname(__DIR__,1).'/config/arunika/platform.php' => config_path('platform.php'),
            dirname(__DIR__,1).'/config/arunika/ui.php' => config_path('ui.php'),
        ], 'aru2ka-configs');

        return $this;
    }

    protected function bootRoutes(): self
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        return $this;
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