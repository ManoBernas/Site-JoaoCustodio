<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //criação da relação entre os modelos Categoria e Produto
    public function produto(){
        return $this->hasMany(Produto::class);
    }

    public function projeto(){
        return $this->hasMany(Projeto::class);
    }

}
