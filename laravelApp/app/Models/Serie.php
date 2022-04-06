<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Serie extends Model
{
    use HasFactory;

//    esse atributo sendo false, evita que as colunas created_at e updated_at existam em minha tabela
    public $timestamps = false;

    protected $fillable = ['id', 'name'];
}
