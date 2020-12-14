<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";
    protected $fillable = ['nome', 'preco', 'descricao'];

    public function vendaprodutos(){
        return $this->hasMany("App\Vendaproduto");
    }
}

