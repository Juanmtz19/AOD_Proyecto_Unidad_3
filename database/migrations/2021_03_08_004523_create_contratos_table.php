<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('grup', 30);
            $table->string('grup2',30);
            $table->string('eventName', 50);
            $table->string('city', 30);
            $table->string('place', 50);
            $table->string('stage',50);
            $table->integer('date');
            $table->tinyInteger('capacity');
            $table->integer('payment');
            $table->text ('description');
            $table->text('comment')->nullable();
            $table->tinyInteger('available')->default(1);
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
        Schema::dropIfExists('contratos');
    }
}
