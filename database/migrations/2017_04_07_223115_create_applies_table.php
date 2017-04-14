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
            $table->unsignedInteger('leader_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('phone');
            $table->string('block');
            $table->unsignedInteger('square');
            $table->enum('plan', ['全装修', '半装修', '待定']);
            $table->decimal('budget', 10, 2)->unsigned();
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
