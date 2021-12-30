@extends('layouts.index')
 
@section('content')   
    <livewire:crud-component model="App\Models\User" form="modules.users.form" />      
@endsection

