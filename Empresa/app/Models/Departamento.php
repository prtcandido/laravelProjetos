<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['id','nome'];

    public function funcionarios() {
    	return $this->hasMany(Funcionario::class);
    }
}
