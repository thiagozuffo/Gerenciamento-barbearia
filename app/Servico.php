<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = "servicos";
    protected $fillable = ['nome', 'preco', 'descricao'];
}

