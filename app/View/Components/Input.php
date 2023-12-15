<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    
    public $name;
    public $type;
    public $value;
    public $label;

    public function __construct(
        string $name,
        string $type = "text",
        string $value = null,
        string $label = null
    ){
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
    }

    public function type(): string {
        return strtolower($this->type);
    }

    function label() {
        return $this->label ?: ucfirst(str_replace("_", " ", $this->name));
    }
    
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
