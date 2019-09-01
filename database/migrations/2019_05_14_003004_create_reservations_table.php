<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->date('started_at');
            $table->date('ended_at');
            $table->time('reserv_hour')->nullable();
            $table->string('conditions')->nullable();
            $table->enum('status', ['reserved', 'canceled', 'reprogramed', 'efected', 'absense'])->default('reserve');

            $table->bigInteger('_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->unique(['user_id', 'service_id', 'started_at'], 'service_user_unique');

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
        Schema::dropIfExists('reservations');
    }
}
