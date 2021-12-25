<?php

namespace Codakarta\Aru2ka\Components\Ui;

use Illuminate\View\Component;

class Panel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title, $description, $icon;

    public function __construct(
        String $title = null,
        String $description = null,
        String $icon = null,
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('aru2ka::ui.panel');
    }
}
