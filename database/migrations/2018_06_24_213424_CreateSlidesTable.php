<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('descricao')->nullable();
            $table->text('texto')->nullable();
            $table->boolean('link_contato')->nullable();
            $table->string('imagem');
            $table->string('ordem')->nullable();
            $table->enum('posicao_entrada', ['center-align','left-align','right-align'])->default('center-align');
            $table->enum('publicar',['sim', 'nao'])->default('nao');
            $table->string('usuario_inclusao')->nullable();
            $table->string('usuario_alteracao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('slides');
    }
}
