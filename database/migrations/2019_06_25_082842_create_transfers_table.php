<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('traslados');
            $table->enum('vehiculo', ['AUTOMOVIL', 'VAN', 'MICROBUS', 'BUSETA', 'BUS']);
            $table->integer('precio_vehiculo');
            $table->integer('precio_guia');
            $table->integer('pax_min');
            $table->integer('pax_max');
            $table->integer('iva')->default(19);
            $table->string('capacidad_maleta')->nullable();
            $table->string('duracion')->nullable();
            $table->string('entrada_atraccion')->nullable();
            $table->string('almuerzo_tipico')->nullable();

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('restrict')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('transfers');
    }
}
