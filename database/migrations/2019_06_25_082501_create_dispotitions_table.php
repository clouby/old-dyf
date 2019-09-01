<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvailabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availability', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('horario');
            $table->enum('vehiculo', ['AUTOMOVIL', 'VAN', 'MICROBUS', 'BUSETA', 'BUS']);
            $table->integer('total');
            $table->integer('min');
            $table->date('created_at');
            $table->date('registered_At');
            $table->integer('max');
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
        Schema::dropIfExists('dispotitions');
    }
}
