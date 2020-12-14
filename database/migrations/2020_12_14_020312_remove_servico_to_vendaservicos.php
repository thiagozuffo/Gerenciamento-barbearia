<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveServicoToVendaservicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vendaservicos', function (Blueprint $table) {
            $table->dropColumn('servico');
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('vendaservicos', function (Blueprint $table) {
             $table->string('servico', 50);
         });
     }
 }