<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaxophonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saxophones', function (Blueprint $table) {
            $table->id();
            $table->string('brand',100);
            $table->string('mark', 40);
            $table->string('Register', 100);
            $table->string('color',100)-> nullable();
            $table->text ('description');
            $table->string('Pieces', 40);
            $table->string('charac',20);
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
        Schema::dropIfExists('saxophones');
    }
}
