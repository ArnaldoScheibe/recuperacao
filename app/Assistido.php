<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistido extends Model
{
    protected $fillable = ['id_filme_fk', 'data_assistido'];
    public $timestamps = false;

    public function filme(){
        return $this->hasOne(Filme::class);
    }
}
