<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestemunhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testemunhos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('especializacao')->nullable();
            $table->string('texto')->nullable();
            $table->text('imagem')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagran')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::drop('testemunhos');
    }
}
