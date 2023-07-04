<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number', 4);
            $table->string('building', 50);
            $table->tinyInteger('floor');
            $table->decimal('rooms', 2,1);
            $table->decimal('square_footage', 8, 2);
            $table->decimal('additional_cost', 8, 2);
            $table->decimal('rent_net', 8, 2);
            $table->decimal('rent_gross', 8, 2);
            $table->tinyInteger('state');
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
        Schema::dropIfExists('apartements');
    }
}
