<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    public $paginator;

    /**
     * Create a new component instance.
     */
    public function __construct($paginator)
    {
        $this->paginator = $paginator;
    }

    public function __get($name)
    {
        return $this->paginator->{$name};
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|\Closure|string
    {
        return view('components.pagination');
    }
}
