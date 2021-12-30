<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->string('plural')->nullable();
            $table->string('slug')->unique();
            $table->string('slugs')->unique();
            $table->string('icon')->default('fa fa-cog')->nullable();
            $table->string('namespace')->nullable();     
            $table->string('route')->nullable();
            $table->string('url')->nullable();          
            $table->boolean('status')->default(true);      

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
