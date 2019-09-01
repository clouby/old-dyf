<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('service_name');
            $table->unsignedInteger('quantity');
            $table->decimal('price', 8, 2);
            $table->date('reserv_start');
            $table->date('reserv_end');
            $table->time('reserv_hour')->nullable();
            $table->string('conditions')->nullable();
            $table->string('temp_user');
            $table->unsignedBigInteger('service_id');

            $table->unique(['temp_user', 'service_id', 'reserv_start'], 'user_date_service_unique');
            
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
        Schema::dropIfExists('shoppings');
    }
}
