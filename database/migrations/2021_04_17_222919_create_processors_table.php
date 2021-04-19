<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('socket');
            $table->string('microarchitecture');
            $table->unsignedInteger('clock_frequency');
            $table->string('integrated_graphic')->default('None');
            $table->string('supported_memory');                     // TODO: WIELE DO WIELU / JEDEN DO WIELU
            $table->unsignedSmallInteger('number_of_cores');
            $table->unsignedSmallInteger('number_of_threads');
            $table->unsignedInteger('cache_size');
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
        Schema::dropIfExists('processors');
    }
}
