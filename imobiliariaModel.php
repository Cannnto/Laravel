<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imobiliariaModel extends Model
{
    use HasFactory;
    protected $table = 'imobiliariaTable';
    protected $primaryKey = 'codigo';
    protected $fillable = ['nome','endereco','preco','venda'];
    public $timestamps = false;
}

