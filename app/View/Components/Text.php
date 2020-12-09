<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Text extends Component
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
    public $type;
    public $place;
    public $rootClass;
    public $only;
    public $required;
    public $data;

    public function __construct($label = false,$name = false,$value = false,$class = false,$id = false,$attrs = false,$help = false, $type = false, $place = false, $rootClass = false, $only = false, $required = false, $data = [])
    {
        $this->dataattr = $data;
        $this->rootClass = $rootClass;
        $this->place = $place;
        if($type){
            $this->type = $type;
        }
        else $this->type = 'text';
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->class = $class;
        if($id){
            $this->id = $id;
        }
        else{
            $this->id = uniqid();
        }
        $this->attrs = $attrs;
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
        return view('components.text');
    }
}
