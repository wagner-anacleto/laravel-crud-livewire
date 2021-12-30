<?php

use Illuminate\Support\Facades\Route;
use App\Models\Module;
use App\Http\Controllers\ModuleController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth'])->prefix('admin/')->group(function() {
    try {
        foreach (Module::all() as $module) {          
           Route::resource($module->slugs, ModuleController::class)->only('index');
        }
    } catch (\InvalidArgumentException $e) {
        throw new \InvalidArgumentException("Custom routes hasn't been configured because: ".$e->getMessage(), 1);
    } catch (\Exception $e) {
        // do nothing, might just be because table not yet migrated.
    }
});

Route::resource('modules', ModuleController::class);
Route::resource('users', ModuleController::class);
