<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsometriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isometries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number', 10)->nullable();
            $table->tinyInteger('floor');
            $table->tinyInteger('isApartement');
            $table->text('svg');
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
        Schema::dropIfExists('isometries');
    }
}
