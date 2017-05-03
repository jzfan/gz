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
            $table->unsignedInteger('user_id');
            $table->smallInteger('WO')->unsigned()->default(0);
            $table->tinyInteger('rank')->unsigned()->default(1);
            $table->smallInteger('points')->unsigned()->default(0);
            $table->tinyInteger('quality')->unsigned()->default(80);
            $table->tinyInteger('working_age')->unsigned();
            $table->string('area');
            $table->string('ex_company')->nullable();
            $table->string('tel')->nullable();
            $table->string('from')->nullable();
            $table->unsignedInteger('fans')->default(0);
            $table->unsignedInteger('deposit')->default(0);
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
        Schema::dropIfExists('leaders');
    }
}
