<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coolers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer');
            $table->boolean('led');
            $table->unsignedInteger('height');
            $table->string('socket');                               // TODO: WIELE DO WIELU ALBO POLYMORPHIC WIELE DO WIELU :)
            $table->unsignedInteger('max_tdp'); 
            $table->string('material');
            $table->unsignedSmallInteger('number_heat_pipe');
            $table->unsignedSmallInteger('number_fan');
            $table->unsignedInteger('fan_diameter');
            $table->unsignedInteger('fan_speed');
            $table->unsignedFloat('cfm');                           //TODO: MACIEK REVIEW
            $table->unsignedFloat('noises');
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
        Schema::dropIfExists('coolers');
    }
}
