<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChassisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chassis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedFloat('max_graphic_size');
            $table->unsignedFloat('max_cooler_size');
            $table->string('type');
            $table->string('compatibility');                 //TODO: manyToMany
            $table->unsignedSmallInteger('max_drive_2_5');
            $table->unsignedSmallInteger('max_drive_3_5');
            $table->string('expansion_slots');               //   SLOTY ROZSZERZEŃ
            $table->string('front_panel');
            $table->boolean('window');
            $table->boolean('led');
            $table->unsignedFloat('height');
            $table->unsignedFloat('width');
            $table->unsignedFloat('depth');
            $table->unsignedFloat('weight');
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
        Schema::dropIfExists('chassis');
    }
}
