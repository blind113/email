<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id('id_email');
            $table->string('de',60)->nullable();
            $table->string('para', 200)->nullable();
            $table->string('cc',200)->nullable();
            $table->string('cco', 200)->nullable();
            $table->string('usuario_envio', 7)->nullable();
            $table->text('mensagem')->nullable();
            $table->dateTime('dt_cadastro')->nullable();
            $table->text('assunto')->nullable();
            $table->boolean('processamento',1)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
