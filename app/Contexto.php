<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contexto extends Model
{
    protected $fillable = ['descricao'];
    protected $table = 'contextos';
}
