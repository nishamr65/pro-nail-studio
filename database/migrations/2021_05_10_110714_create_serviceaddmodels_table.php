<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceaddmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceaddmodels', function (Blueprint $table) {
            $table->id();
            $table->string('sid');
            $table->string('sname');
            $table->string('sdes');
            $table->string('scat');
            $table->string('srate');
            $table->string('simg');
           
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
        Schema::dropIfExists('serviceaddmodels');
    }
}
