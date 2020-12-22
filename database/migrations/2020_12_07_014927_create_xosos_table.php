<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xosos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('day');
            $table->string('characters');
            $table->string('special');
            $table->string('first');
            $table->json('secondPrize');
            $table->json('thirdPrize');
            $table->json('fourPrize');
            $table->json('fivePrize');
            $table->json('sixPrize');
            $table->json('sevenPrize');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xosos');
    }
}
