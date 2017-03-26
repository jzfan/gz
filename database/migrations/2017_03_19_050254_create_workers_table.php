<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('user_id');
            $table->enum('craft', ['泥工', '木工', '油漆工', '水电工', '其他']);
            $table->enum('area', ['汉口', '汉阳', '武昌']);
            $table->timestamp('birthday');
            $table->smallInteger('daily_wage')->unsigned();
            $table->text('evaluate')->nullable();
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
        Schema::dropIfExists('workers');
    }
}
