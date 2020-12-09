<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $help;
    public $label;
    public $value;
    public $id;
    public $class;
    public $attrs;
    public $name;
    public $checked;
    public $rootClass;
    public $only;

    public function __construct($label = false,$name = false,$value = false,$class = false,$id = false,$attrs = false,$help = false, $checked = false, $rootClass = false, $only = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
        $this->rootClass = $rootClass;
        if($id){
            $this->id = $id;
        }
        else{
            $this->id = 'custom-checkbox-'.uniqid();
        }
        $this->attrs = $attrs;
        $this->help = $help;
        $this->checked = $checked;
        $this->only = $only;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
