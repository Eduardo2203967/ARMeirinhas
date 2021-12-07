<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Duvida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duvidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_duv', 35);
            $table->string('email_duv');
            $table->text('msg_duv');
            $table->dateTime('dta_duv')->nullable();
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
        Schema::dropIfExists('duvidas');
    }
}
