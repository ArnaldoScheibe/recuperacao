<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = ['nome_genero'];
    public $timestamps = false;

    public function filme(){
        return $this->hasMany(Filme::class);
    }
}
