<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GroupText extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $id;

    public function __construct($class = false, $id = false)
    {
        $this->class = $class;
        $this->id = $id ? $id : uniqid();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.group-text');
    }
}
