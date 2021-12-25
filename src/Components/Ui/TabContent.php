<?php

namespace Codakarta\Aru2ka\Components\Ui;

use Illuminate\View\Component;

class TabContent extends Component
{
    /**
     * @var string
     */
    public $title;

    public $active;

    public $activeClass;

    public $key;

    /**
     * TabContentComponent constructor.
     */
    public function __construct(string $title, bool $active = false)
    {
        $this->title = $title;
        $this->active = $active;
        $this->activeClass = $active ? 'active' : '';

        $this->key = 'tab-content-'.bin2hex(random_bytes(5));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('aru2ka::ui.tab-content');
    }
}
