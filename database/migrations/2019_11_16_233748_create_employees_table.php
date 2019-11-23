<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->unsignedInteger('creator_id')->nullable();

            $table->unsignedInteger('updater_id')->nullable();

            $table->unsignedInteger('branch_id');
            
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->integer('gender')
                    ->default(1)
                    ->comment('1 - male, 2 - female');
            $table->string('primary_phone');
            $table->string('secondary_phone')->nullable();
            $table->longText('address');
            $table->string('city');
            $table->string('state');   
            $table->string('country');
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
