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
            $table->string('condição');
            $table->string('fornecedor');
            $table->text('descricao');
            $table->string('foto')->nullable();
            $table->boolean('patrimonio' )->default(false);
            $table->string('numero_patrimonial')->nullable();
            $table->string('numero_controle')->nullable();
            $table->text('observacao');
            $table->timestamps();
            //Acredito que aqui seriam atibutos de movimentação-> Atribuído a, quantidade, 
            //material, local, localização, dt entrada, observações, 
            //
            // Patrimonio -> Sim: 
            // • Ter a opção de controle de movimentação do bem, de modo que possamos informar em qual local está, a data de entrada/saída e o responsável pela retirada do bem para uso.
            // • Ter a opção de retirar o bem do sistema em caso de devolução ou baixa patrimonial.

            // Patrimonio -> Não:
            // 
            //     • Ter a opção de retirar do controle de estoque em caso de uso/consumo.
            //     • Registrar datas de retiradas e quem retirou.
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
