<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('type');
            $table->string('memory_type');
            $table->unsignedSmallInteger('total_capacity');
            $table->unsignedSmallInteger('number_of_modules');
            $table->unsignedSmallInteger('tdp');
            $table->unsignedInteger('working_frequency');
            $table->boolean('cooling');
            $table->boolean('led');
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
        Schema::dropIfExists('rams');
    }
}
