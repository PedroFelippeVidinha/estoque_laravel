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
            $table->string('name', 50);
            $table -> string('uf', 2);
            $table->timestamps();
        });

        foreach($this->states as $state) {
            UF::create($state);
        };
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

    private $states = [
        ['uf' => 'AC', "name" => 'Acre'],
        ['uf' => 'AL', "name" => 'Alagoas'],
        ['uf' => 'AM', "name" => 'Amazonas'],
        ['uf' => 'AP', "name" => 'Amapá'],
        ['uf' => 'BA', "name" => 'Bahia'],
        ['uf' => 'CE', "name" => 'Ceará'],
        ['uf' => 'DF', "name" => 'Distrito Federal'],
        ['uf' => 'ES', "name" => 'Espírito Santo'],
        ['uf' => 'GO', "name" => 'Goiás'],
        ['uf' => 'MA', "name" => 'Maranhão'],
        ['uf' => 'MG', "name" => 'Minas Gerais'],
        ['uf' => 'MS', "name" => 'Mato Grosso do Sul'],
        ['uf' => 'MT', "name" => 'Mato Grosso'],
        ['uf' => 'PR', "name" => 'Pará'],
        ['uf' => 'PB', "name" => 'Paraíba'],
        ['uf' => 'PE', "name" => 'Pernambuco'],
        ['uf' => 'PI', "name" => 'Piauí'],
        ['uf' => 'PR', "name" => 'Paraná'],
        ['uf' => 'RJ', "name" => 'Rio de Janeiro'],
        ['uf' => 'RN', "name" => 'Rio Grande do Norte'],
        ['uf' => 'RO', "name" => 'Rondônia'],
        ['uf' => 'RR', "name" => 'Roraima'],
        ['uf' => 'RS', "name" => 'Rio Grande do Sul'],
        ['uf' => 'SC', "name" => 'Santa Catarina'],
        ['uf' => 'SE', "name" => 'Sergipe'],
        ['uf' => 'SP', "name" => 'São Paulo'],
        ['uf' => 'TO', "name" => 'Tocantins']
    ];
}
