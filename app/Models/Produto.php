<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table='produto';
    use HasFactory;

    /*protected $fillable = [
        'id',
        'nome',
        'Quantidade',
        'preco',
    ];*/

    public function relProduto(){
        return $this->hasOne('App\User','id', 'name');
    }
}
