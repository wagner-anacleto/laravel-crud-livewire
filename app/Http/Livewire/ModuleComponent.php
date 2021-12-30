<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleComponent extends Component
{    
    public $data = [];
    public $model, $form, $name, $plural, $icon;

    
    public function render()
    {
        return view('livewire.module-component');
    }

    public function mount(Request $request)
    {
        $slug0 = $request->segments()[0];      
        $slug1 = $request->segments()[1];
        $slug2 = $request->segments()[2];
        $slug = "$slug1/$slug2";
        $this->form = "$slug.form";

        
        if(Module::where('slugs', '=', $slug)->first()){
            
            $module = Module::where('slugs', '=', $slug)->first();           

            $this->model = $module->namespace;        
            $this->name =  $module->name;
            $this->plural =  $module->plural;
            $this->icon = $module->icon;
           
       }

        
    }

}
