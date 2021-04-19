<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSsdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ssds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer');
            $table->string('type');
            $table->string('interface');
            $table->unsignedInteger('storage_memory');
            $table->unsignedInteger('write_speed');
            $table->unsignedInteger('read_speed');
            $table->string('nand_flash_type');
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
        Schema::dropIfExists('ssds');
    }
}