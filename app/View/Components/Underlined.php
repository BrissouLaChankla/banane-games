<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Underlined extends Component
{
    public $word;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($word)
    {
        $this->word = $word;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.underlined');
    }
}
