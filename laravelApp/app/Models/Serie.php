<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Serie extends Model
{
    use HasFactory;

    // esse atributo sendo false, evita que as colunas created_at e updated_at existam na tabela
    public $timestamps = false;
    // evita que o uuid seja transformado em int (isso tava dando uma dor de cabeca, meu amigo ...)
    public $incrementing = false;
    protected $fillable = ['id', 'name'];
}
