<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namakapal');
            $table->string('flag');
            $table->integer('gpt');
            $table->date('arrival')->format('d/m/y H:i');
            $table->date('departure')->format('d/m/y H:i');
            $table->string('location');
            $table->string('activity');
            $table->string('cargo');
            $table->integer('volume');
            $table->string('lastport');
            $table->string('nextport');
            $table->string('status');
            $table->string('image');
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
        Schema::dropIfExists('data');
    }
};
