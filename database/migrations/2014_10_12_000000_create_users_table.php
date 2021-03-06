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
            $table->string('name')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('qq')->nullable();
            $table->string('avatar')->nullable();
            $table->string('password')->nullable();
            $table->enum('role', ['admin', 'editor', 'leader', 'worker', 'customer'])->default('customer');
            $table->string('api_token', 60)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
