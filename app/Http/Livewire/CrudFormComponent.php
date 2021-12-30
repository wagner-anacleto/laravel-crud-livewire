<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrudFormComponent extends Component
{
    public $data = [];
    public $model, $form;

    protected $listeners = [
        'updateDeleteShow',        
    ];

    public function render()
    {
        return view('livewire.crud-form-component');
    }

    public function create()
    {
        $this->resetInput();
    }

    public function store() 
    {         
        $this->validate(app($this->model)->rules); 
        $this->data['status'] = true; 
         
        $this->model::create($this->data);       
        $this->emit('refresh');   
 
        session()->flash('message', 'Dado criado com sucesso.'); 
        $this->resetInput(); 

    } 

    public function update() 
    {         
        $this->validate(app($this->model)->rules); 
        $data = $this->model::find($this->data['id']); 
 
        $data->update($this->data);      
        $this->emit('refresh');  
        session()->flash('message', 'Dado atualizado com sucesso.'); 

    } 
 
    public function delete() 
    { 
        $this->item = $this->model::find($this->data['id']); 

        try { 
            $this->item->delete(); 
            session()->flash('message', 'Dado deletado com sucesso.'); 
            $this->resetInput(); 
            $this->emit('refresh');  

        } catch (QueryException $ex) { 

            session()->flash('error', 'Nao foi possivel deletar o dado.'); 
            $this->resetInput();            

        } 
    } 
 
    public function updateDeleteShow($data, $action)
    {
       $this->resetInput(); 
       $this->data = $data;  
       $this->action = $action;
    }

    private function resetInput()
    {
       $this->resetErrorBag();
       $this->resetValidation();
       $this->data = null;
    }   

}
