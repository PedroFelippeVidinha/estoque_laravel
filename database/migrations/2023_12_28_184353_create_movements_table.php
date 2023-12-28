<?php

use App\Models\Movement;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table-> string('move', 20);
            $table->timestamps();
        });

        Movement::insert(
            array(
                ['move' => 'Entrada'],

                ['move' => 'Saída'],

                ['move' => 'Retorno'],

                ['move' => 'Baixa'],

            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviments');
    }
}
