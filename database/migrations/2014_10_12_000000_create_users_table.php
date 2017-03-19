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
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('qq')->nullable();
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'editor', 'manager', 'worker', 'customer'])->default('customer');
            $table->string('api_token', 60)->nullable();
            $table->string('qq_id', 60)->nullable();
            $table->string('wx_id', 60)->nullable();
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
