<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboards', function (Blueprint $table) {
            $table->id();
            $table->string('brand',100);
            $table->string ('mark',100);
            $table->string ('sampler',50);
            $table->string('color',100)-> nullable();
            $table->string('octaves',50);
            $table->string('case',50); //estuche
            $table->string('tune',20);
            $table->text('comment')->nullable();
            $table->string('pedal', 30);
            $table->string('chac');
            $table->text('description');
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
        Schema::dropIfExists('keyboards');
    }
}
