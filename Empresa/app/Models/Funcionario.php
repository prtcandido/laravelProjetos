<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['id','nome','endereco','dataNasc','departamento_id'];

    public function departamento() {
    	return $this->belongsTo(Departamento::class,'departamento_id');
    }

    public function projetos() {
    	return $this->belongsToMany(Projeto::class);
    }

}
