<?php

namespace App\Models;

use Kdion4891\LaravelLivewireTables\Column;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';

    protected $fillable = [
        'name', 'plural', 'slug', 'slugs', 'icon', 'namespace', 'route', 'url', 'status'
    ];

    public $rules = [
        'data.name' => 'required|min:3|max:255',
        'data.plural' => 'required|min:3|max:255',
        'data.slug' => 'required|min:3|max:255',
        'data.slugs' => 'required|min:3|max:255',
        'data.icon' => 'required|min:3|max:255',
        'data.namespace' => 'required|min:3|max:255',
    ];

    public static function columns()
    {
        return [
            Column::make('id')->searchable()->sortable(),
            Column::make('name')->searchable()->sortable(),
            Column::make('plural')->searchable()->sortable(),
            Column::make('slugs')->searchable()->sortable(),
            Column::make('Ação')->view('livewire.buttons.buttons'),
        ];
    }




}
