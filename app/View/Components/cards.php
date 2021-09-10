<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cards extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     *
     *
     */
    public $name;
    public $desciption;
    public $href;
    public $picture;
    public function __construct($name,$desciption,$href, $picture)
    {
        //
        $this->name=$name;
        $this->desciption=$desciption;
        $this->href=$href;
        $this->picture=$picture;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards');
    }
}
