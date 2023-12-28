<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovement_productsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movement_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor('space_id')->constrained('spaces', 'id');
            $table->foreignIdFor('product_id')->constrained('products', 'id');
            $table->foreignIdFor('movement_id')->constrained('movements', 'id');
            $table->foreignIdFor('user_id')->constrained('users', 'id');
            $table->integer('quantidade');
            $table->string('resp_retirada');
            $table->string('local_retirada');
            $table->string('localizacao');
            $table->string('descricao');
            $table->text('observacao');
            $table->date('data_entrada');
            $table->date('data_retirada');
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
        Schema::dropIfExists('movement_products');
    }
}
