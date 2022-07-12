<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            // $table->string('designacao');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('disponibilidade_id');
            $table->string('preBase');
            // $table->date('dataInicio');
            // $table->string('github');
            // $table->text('descricao');
            $table->timestamps();

            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');

           /*  $table->foreign('disponibilidade_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
