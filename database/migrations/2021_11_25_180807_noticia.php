<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Noticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); /* Chave Estrangeira */
            $table->string('titulo_noticia', 50);
            $table->string('categoria_noticia', 12);
            $table->text('descri_noticia');
            $table->binary('img_noticia');
            $table->dateTime('dta_noticia');
            $table->timestamps();

            /* Chave Estrangeira */
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia');
    }
}
