<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputerSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_sets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->foreignId('processor_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('motherboard_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ram_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('gpu_id')->constrained()->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('cooler_id')->constrained()->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('hdd_id')->constrained()->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('ssd_id')->constrained()->nullable()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('psu_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('chassis_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('computer_sets');
    }
}
