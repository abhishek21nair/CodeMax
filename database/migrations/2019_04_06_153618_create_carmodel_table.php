<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarmodelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carmodel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameofmodel')->nullable();
            $table->bigInteger('manufactureid')->nullable();
            $table->longText('imagebase64string')->nullable();
            $table->string('nameofimage')->nullable();
            $table->bigInteger('sizeofimage')->nullable();
            $table->string('typeofimage')->nullable();
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
        Schema::dropIfExists('carmodel');
    }
}
