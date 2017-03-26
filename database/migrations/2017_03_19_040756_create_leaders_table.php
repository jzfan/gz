<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('user_id');
            $table->smallInteger('WO')->unsigned()->default(0);
            $table->tinyInteger('rank')->unsigned()->default(1);
            $table->smallInteger('points')->unsigned();
            $table->tinyInteger('quality')->unsigned();
            $table->tinyInteger('working_age')->unsigned();
            $table->string('work_area', 100);
            $table->string('ex_company', 100);
            $table->string('tel', 20)->default('');
            $table->string('from', 100);
            $table->unsignedInteger('fans')->default(0);
            $table->unsignedInteger('deposit');
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
        Schema::dropIfExists('leaders');
    }
}
