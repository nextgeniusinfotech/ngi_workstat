<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $label;
    public $name;
    public $id;
    public $class;
    public $key;
    public $value;
    public function __construct($type, $label, $name, $id = null, $class = null, $key = null, $value = null)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.input');
    }
}
