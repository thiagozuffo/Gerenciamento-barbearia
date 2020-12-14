<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendaservico extends Model
{
    protected $table = "vendaservicos";
    protected $fillable = ['data', 'preco', 'servico_id'];

    public function servico(){
        return $this->belongsTo("App\Servico");
    }
}

