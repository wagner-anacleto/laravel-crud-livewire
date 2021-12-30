@extends('layouts.index')
 
@section('content')   
    <livewire:crud-component model="App\Models\Module" form="modules.modules.form" />      
@endsection

