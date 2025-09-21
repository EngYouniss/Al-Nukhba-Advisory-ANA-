<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OperationsDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $editRoute;
    public $deleteRoute;
    public $activateRoute;

    public function __construct($editRoute = null, $deleteRoute = null, $activateRoute = null)
    {
        $this->editRoute    = $editRoute;
        $this->deleteRoute  = $deleteRoute;
        $this->activateRoute = $activateRoute;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.operations-dropdown');
    }
}
