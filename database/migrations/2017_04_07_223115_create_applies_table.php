<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('leader_id')->nullable();
            $table->string('name')->nullable();
            $table->string('phone');
            $table->string('block')->nullable();
            $table->string('square')->nullable();
            $table->enum('plan', ['全装修', '半装修', '待定'])->default('待定');
            $table->enum('from', ['平台', '个人'])->default('平台');
            $table->string('budget')->nullable();
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
        Schema::dropIfExists('applies');
    }
}
