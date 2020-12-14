<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendaproduto extends Model
{
    protected $table = "vendaprodutos";
    protected $fillable = ['data', 'preco', 'produto_id'];

    public function produto(){
        return $this->belongsTo("App\Produto");
    }
}

