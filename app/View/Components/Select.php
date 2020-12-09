<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $attrs;
    public $class;
    public $rootClass;
    public $id;
    public $options;
    public $value;
    public $label;
    public $multi;
    public $help;
    public $only;
    public $required;
    public $dataattr;

    public function __construct($name = false, $attrs = false, $class = false, $rootClass = false, $id = false, $options = [], $value = false, $label = false, $multi = false, $help = false, $only = false, $required = false, $data = [])
    {
        $this->dataattr = $data;
        $this->name = $name;
        $this->attrs = $attrs;
        $this->class = $class;
        $this->rootClass = $rootClass;
        $this->id = $id ? $id : uniqid();
        $this->options = (array)$options;
        $this->value = $value;
        $this->label = $label;
        $this->multi = $multi;
        $this->help = $help;
        $this->only = $only;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
