<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionals";
    protected $fillable = ['nome', 'profissao', 'descricao'];
}

