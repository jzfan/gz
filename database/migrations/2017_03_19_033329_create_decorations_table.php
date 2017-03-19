<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decorations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cutomer_id');
            $table->unsignedInteger('manager_id');
            $table->string('block');
            $table->smallInteger('square')->unsigned();
            $table->enum('plan', ['all', 'half', 'pending']);
            $table->smallInteger('budget')->unsigned();
            $table->enum('status', ['book', 'offer', 'working', 'done']);
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
        Schema::dropIfExists('decorations');
    }
}
