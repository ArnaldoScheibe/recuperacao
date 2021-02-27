<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['nome_filme','ano_filme','id_genero_fk'];
    public $timestamps = false;

    public function assistido(){
        return $this->hasOne(Assistido::class);
    }

    public function genero(){
        return $this->hasOne(Genero::class);
    }
}
