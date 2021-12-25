<?php

namespace Codakarta\Aru2ka\Components\Ui;

use Illuminate\View\Component;

class Breadcumb extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('arunika::ui.breadcumb');
    }
}