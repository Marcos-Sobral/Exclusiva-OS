<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table='produtos';   
    use HasFactory;

    //protected $dates = ['date'];

    protected $guarded = [];
   protected $fillable = [
        "idProduto",
        "nomeProduto",
        "quantidadeProduto",
        "precoProduto",
        "image",
    ];
/*

    public function relProduto(){
        return $this->hasOne('App\User','id', 'name');
    }*/
}
