<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemvenda extends Model
{
    protected $table = "itemvendas";
    protected $fillable = ['cliente', 'descricao'];



    public function produtos(){
        return $this->hasMany("App\ItemvendaProduto");
    }
}
