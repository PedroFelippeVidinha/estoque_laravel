<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('space_id')->constrained('spaces', 'id');
            $table->foreignId('category_id')->constrained('categories', 'id'); //departamento->categoria
            $table->string('name');
            $table->string('tipo');
            $table->string('marca');
            $table->string('tamanho');
            $table->string('condicao');
            $table->string('fornecedor');
            $table->text('descricao');
            $table->string('foto')->nullable();
            $table->boolean('patrimonio' )->default(false);
            $table->string('numero_patrimonial')->nullable();
            $table->string('numero_controle')->nullable();
            $table->text('observacao');
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
        Schema::dropIfExists('products');
    }
}
