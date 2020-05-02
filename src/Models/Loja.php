<?php

namespace LuanCS\MinhasLojas\Models;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = 'lojas';
    protected $fillable = ['nome', 'endereco'];
}