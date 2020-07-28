<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passes', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->string('email')->unique();
            $table->string('photo', 200);
            $table->unsignedBigInteger('type');
            $table->date('date_begin')->nullable();
            $table->date('date_end')->nullable();
            $table->string('quest')->nullable();
            $table->string('status')->default('Рассматривается');
            $table->string('prob')->default('');
            $table->timestamps();


            $table->foreign('type')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passes');
    }
}
