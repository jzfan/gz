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
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('leader_id')->nullable();
            $table->unsignedInteger('offer_id')->nullable();
            $table->string('block');
            $table->smallInteger('square')->unsigned();
            $table->enum('plan', ['全装修', '半装修', '待定']);
            $table->smallInteger('budget')->unsigned();
            $table->enum('status', ['申请', '报价', '审核', '施工', '完工']);
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
        Schema::dropIfExists('applies');
    }
}
