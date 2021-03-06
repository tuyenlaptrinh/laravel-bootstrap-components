<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public $id;
    public $content;
    public $close;
    public $attrs;
    public $type;

    public function __construct($class = false, $id = false, $content = '', $close = false, $attrs = false, $type = 'success')
    {
        $this->type = $type ? 'alert-'.$type: false;
        $this->class = $class;
        $this->id = $id ? $id : uniqid();
        $this->content = $content;
        $this->close = $close;
        $this->attrs = $attrs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
