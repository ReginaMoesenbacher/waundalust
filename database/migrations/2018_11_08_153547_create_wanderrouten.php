<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWanderrouten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wanderrouten', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->time('length');
            $table->string('distance');
            $table->string('claim');
            $table->text('content');
            $table->text('preview');
            $table->text('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wanderrouten');
    }
}
