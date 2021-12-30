<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        DB::table('modules')->insert([
            'id' => '1',           
            'name' => 'User',
            'plural' => 'Users',  
            'slug' => 'users',         
            'slugs' => 'modules/users',
            'icon' => 'fa fa-users',           
            'namespace' => 'App\Models\User',        
            'route' => 'users.index',
            'url' => '/admin/modules/users',            
            'status' => true,          
        ]);
        
        DB::table('modules')->insert([
            'id' => '2',           
            'name' => 'Module',
            'plural' => 'Modules',   
            'slug' => 'modules',          
            'slugs' => 'modules/modules',
            'icon' => 'fa fa-diamond',           
            'namespace' => 'App\Models\Module',        
            'route' => 'modules.index',
            'url' => '/admin/modules/modules',            
            'status' => true,          
        ]);



    }
}
