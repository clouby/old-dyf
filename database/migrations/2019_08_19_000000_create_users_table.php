<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('dni_type', ['CC', 'CE', 'PP'])->default('CC');
            $table->string('dni_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('nickname');
            $table->string('email')->unique();
            $table->timestamp('verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('avatar_snapshot')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
