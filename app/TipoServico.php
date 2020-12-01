<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposervico extends Model
{
    protected $table = "tipo_servicos";
    protected $fillable = ['descricao'];
}

