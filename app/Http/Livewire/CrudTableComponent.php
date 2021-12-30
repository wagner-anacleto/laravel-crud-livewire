<?php

namespace App\Http\Livewire;

use App\Model;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class CrudTableComponent extends TableComponent
{
    public $per_page = 10;
    public $checkbox = false; 
    protected $paginationTheme = 'bootstrap'; 
 
    public $model, $form;
   
    protected $listeners = ['refresh'];

    public function refresh(){
        $this->query();
    }

    public function query()
    {
         return $this->model::query();
    }

    public function columns()
    {
        if(method_exists($this->model, 'columns')){ 
            return app($this->model)::columns();
        } else {
            return [
                Column::make('ID')->searchable()->sortable(),
                Column::make('Created At')->searchable()->sortable(),
                Column::make('Updated At')->searchable()->sortable(),
            ];
        }
    }

    public function updateDeleteShow($data, $action){ 
          $this->emit('updateDeleteShow', $data, $action);
    }


    
}
