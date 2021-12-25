<?php

namespace Codakarta\Aru2ka\Components\Ui;

use Illuminate\View\Component;

class CardFooter extends Component
{
    /**
     * @var string
     */
    public $left;

    /**
     * @var string
     */
    public $right;

    /**
     * CardComponent constructor.
     *
     * @param string $left
     * @param string $right
     */
    public function __construct(string $left = null, string $right = null)
    {
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('arunika::ui.card-footer');
    }
}
