<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemvendaProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemvenda_produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('itemvenda_id')->unsigned()->nullable();
            $table->foreign('itemvenda_id')->references('id')->on('itemvendas');
            $table->bigInteger('produto_id')->unsigned()->nullable();
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::dropIfExists('itemvenda_produtos');
    }
}
