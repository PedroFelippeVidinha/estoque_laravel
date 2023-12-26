<?php

use App\Models\Uf;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufs', function (Blueprint $table) {
            $table->id();
            $table -> string('uf', 50);
            $table->timestamps();
        });

        Uf::insert(
            array(
                ['uf' => 'Acre'],

                ['uf' => 'Alagoas'],

                ['uf' => 'Amazonas'],

                ['uf' => 'Amapá'],

                ['uf' => 'Bahia'],

                ['uf' => 'Ceará'],

                ['uf' => 'Distrito Federal'],

                ['uf' => 'Espírito Santo'],

                ['uf' => 'Goiás'],

                ['uf' => 'Maranhão'],

                ['uf' => 'Minas Gerais'],

                ['uf' => 'Mato Grosso do Sul'],

                ['uf' => 'Mato Grosso'],

                ['uf' => 'Pará'],

                ['uf' => 'Paraíba'],

                ['uf' => 'Pernambuco'],

                ['uf' => 'Piauí'],

                ['uf' => 'Paraná'],

                ['uf' => 'Rio de Janeiro'],

                ['uf' => 'Rio Grande do Norte'],

                ['uf' => 'Rondônia'],

                ['uf' => 'Roraima'],

                ['uf' => 'Rio Grande do Sul'],

                ['uf' => 'Santa Catarina'],

                ['uf' => 'Sergipe'],

                ['uf' => 'São Paulo'],

                ['uf' => 'Tocantins']

            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ufs');
    }
}
