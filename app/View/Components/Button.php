<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $text;
    public $name;
    public $attrs;
    public $type;
    public $id;
    public $class;
    public $color;

    public function __construct($text = false, $name = false, $attrs = false, $type = 'button', $id = false, $class = false, $color = 'primary')
    {
        $this->color = 'btn-'.$color;
        $this->text = $text;
        $this->name = $name;
        $this->attrs = $attrs;
        $this->type = $type;
        $this->id = $id ? $id : uniqid();
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
}
