<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $static;
    public $center;
    public $scroll;
    public $class;
    public $id;
    public $dataattr;

    public function __construct($static = false, $center = false, $scroll = false, $class = false, $id= false, $data = [])
    {
        $this->dataattr = $data;
        $this->static = $static;
        $this->center = $center;
        $this->scroll = $scroll;
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
        return view('components.modal');
    }
}
