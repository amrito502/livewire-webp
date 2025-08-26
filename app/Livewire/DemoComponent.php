<?php

namespace App\Livewire;

use Livewire\Component;

class DemoComponent extends Component
{
    public $name = "mike";
    public function render()
    {
        return view('livewire.demo-component',[
            'age' => 30
        ]);
    }
}
