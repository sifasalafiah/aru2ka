<?php

namespace Codakarta\Aru2ka\Components\Ui;

use Illuminate\View\Component;

class Label extends Component
{
    public $label;

    public $color;

    /**
     * PanelComponent constructor.
     *
     * @param string $label
     * @param string $color
     */
    public function __construct(string $label = null, string $color = null)
    {
        $this->label = $label;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $this->color ??= config('laravolt.ui.color');

        return <<<'blade'
        <div themed {{ $attributes->merge(['class' => 'ui label '.$color])}}>
            {{ $label ?? $slot }}
        </div>
        blade;
    }
}