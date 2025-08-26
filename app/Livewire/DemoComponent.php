<?php

namespace App\Livewire;

use Livewire\Component;

class DemoComponent extends Component
{
    public $name = "mike";

    public $count_value = 0;

    public function increment(){
        $this->count_value++;
    }
    public function decrement(){
        $this->count_value--;
    }
    public function render()
    {
        return view('livewire.demo-component',[
            'age' => 30
        ]);
    }
}
