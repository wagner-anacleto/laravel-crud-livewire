<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrudComponent extends Component
{
    public $model, $form;  

    public function render()
    {
        return view('livewire.crud-component');
    }
}
