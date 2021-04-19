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
            $table->string('form_factor');
            $table->string('name');
            $table->string('compatible_cpu_brand');
            $table->string('socket_type');
            $table->string('memory_type');
            $table->unsignedInteger('max_slot_memory');
            $table->unsignedInteger('max_memory_amount');
            $table->unsignedInteger('memory_frequency');    // TODO: MANYTOMANY
            $table->string('memory_architecture');
            $table->string('expansion_slots');          // TODO: gniazda rozszerzeń, wiele do wielu z ilością?
            $table->string('storage_interfaces');       // TODO: złącza napędów, wiele do wielu z ilością?
            $table->string('internal_connector');       // just view
            $table->string('rear_panel');               // just view
            $table->unsignedInteger('tdp');
            $table->unsignedFloat('price');
            $table->boolean('is_produced');
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
