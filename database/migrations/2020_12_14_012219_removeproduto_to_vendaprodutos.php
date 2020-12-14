<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveprodutoToVendaprodutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendaprodutos', function (Blueprint $table) {
            $table->dropColumn('produto');
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('vendaprodutos', function (Blueprint $table) {
             $table->string('produto', 50);
         });
     }
 }
 