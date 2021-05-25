<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingmodels', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->string('sdate');
            $table->string('email');
            $table->string('status');
            $table->string('amount');
            $table->string('checkout');
            
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
        Schema::dropIfExists('bookingmodels');
    }
}
