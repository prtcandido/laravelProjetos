<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Teste1Resource extends JsonResource
{
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'nome'=>$this->nome,
            'departamento'=>$this->departamento->nome,
        ];
    }
}
