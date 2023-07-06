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
            $table->string('number', 12);
            $table->string('building', 50);
            $table->string('floor', 10);
            $table->decimal('rooms', 2,1);
            $table->decimal('footage', 8, 2);
            $table->decimal('footage_outer', 8, 2);
            $table->decimal('rent_net', 8, 2);
            $table->decimal('additional_cost', 8, 2);
            $table->decimal('rent_gross', 8, 2);
            $table->string('uri', 255)->nullable();
            $table->tinyInteger('state')->default(0);
            $table->tinyInteger('order')->default(1);
            $table->string('last_update_by', 50)->nullable();
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
