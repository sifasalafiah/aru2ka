<?php

namespace Codakarta\Aru2ka\Components\Ui;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $url;

    /**
     * CardComponent constructor.
     */
    public function __construct(string $title = null, string $content = null, string $url = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('aru2ka::ui.card');
    }
}
