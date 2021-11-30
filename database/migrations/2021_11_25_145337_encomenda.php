<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Encomenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomenda', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->enum('cargo', ['Pendente', 'Enviado', 'Entregue']) ->default('Pendente');
            $table->datetime('dta_encomenda');
            $table->dateTime('dta_entrega');
            $table->char('nif', 9);
            $table->string('morada', 100);
            $table->char('cod_postal', 8);
            $table->string('localidade', 35);
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
        Schema::dropIfExists('encomenda');
    }
}
