<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotherboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer');
            $table->string('form_factor');              //TODO: Check that
            $table->string('name');
            $table->string('compatible_cpu_brand');     //TODO: CHECK
            $table->string('socket_type');              //TODO: CHECK / change to manytomany
            $table->string('memory_type');              //TODO: Check that
            $table->unsignedInteger('max_slot_memory');
            $table->unsignedInteger('max_memory_amount');
            $table->unsignedInteger('memory_frequency');    // CHECK IF MANYTOMANY
            $table->string('memory_architecture');
            $table->string('expansion_slots');        //Many to many??
            //TODO: FINISH BUT AFTER ASKING
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
        Schema::dropIfExists('motherboards');
    }
}
