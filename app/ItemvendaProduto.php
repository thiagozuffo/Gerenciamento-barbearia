<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemvendaProduto extends Model
{
    protected $table = "itemvenda_produtos";
    protected $fillable = ['itemvenda_id', 'produto_id'];


    public function produto(){
        return $this->belongsTo("App\Produto");
    }
}
