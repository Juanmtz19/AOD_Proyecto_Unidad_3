<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guitars', function (Blueprint $table) {
            $table->id();
            $table->string('brand',100);
            $table->string('color',100)-> nullable();
            $table->string('spanish' ,50);
            $table->string('classic' ,50);
            $table->text ('description');
            $table->text('comment')->nullable();
            $table->integer('number');
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
        Schema::dropIfExists('guitar');
    }
}
