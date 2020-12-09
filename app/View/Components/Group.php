<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Group extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $id;
    public $attrs;
    public function __construct($class = false, $id = false, $attrs = false)
    {
        $this->class = $class;
        $this->id = $id ? $id : uniqid();
        $this->attrs = $attrs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.group');
    }
}
