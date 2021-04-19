<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('manufacturer');
            $table->unsignedInteger('power');
            $table->string('standard');
            $table->unsignedInteger('efficiency');
            $table->string('energy_efficient');             // CERTYFIKAT SPRAWNOŚCI
            $table->unsignedSmallInteger('atx_24');
            $table->unsignedSmallInteger('pci_e_6_2');
            $table->unsignedSmallInteger('pci_e_8');
            $table->unsignedSmallInteger('pci_e_6');
            $table->unsignedSmallInteger('cpu_4_4');
            $table->unsignedSmallInteger('cpu_8');
            $table->unsignedSmallInteger('cpu_4');
            $table->unsignedSmallInteger('sata');
            $table->string('modular');
            $table->unsignedFloat('price');
            $table->boolean('led');
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
        Schema::dropIfExists('psus');
    }
}
