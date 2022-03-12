<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardapiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('produto');
            $table->float('valor');
            $table->text('ativo');
            $table->text('bebida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardapios', function (Blueprint $table){
            $table->dropColumn('produto');
            $table->dropColumn('valor');
            $table->dropColumn('ativo');
            $table->dropColumn('bebida');
        });
    }
}
