<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('cliente')->nullable();
            $table->text('qtd')->nullable();
            $table->text('sabor')->nullable();
            $table->text('bebida')->nullable();
            $table->text('obs')->nullable();
            $table->text('entrega')->nullable();
            $table->float('valor');
            $table->text('pagamento');
            $table->text('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos', function (Blueprint $table) {
            $table->dropColumn('cliente');
            $table->dropColumn('qtd');
            $table->dropColumn('sabor');
            $table->dropColumn('bebida');
            $table->dropColumn('obs');
            $table->dropColumn('entrega');
            $table->dropColumn('valor');
            $table->dropColumn('pagamento');
            $table->dropColumn('status');
        });
        
    }
}
