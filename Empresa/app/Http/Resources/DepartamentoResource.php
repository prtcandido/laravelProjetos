<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FuncionarioResource;

class DepartamentoResource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'nome' => $this->nome,
            'funcionarios' => FuncionarioResource::collection($this->funcionarios)
        ];
    }
}
