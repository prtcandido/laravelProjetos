<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Resources\ProdutoResource;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    public function apiindex(){
    	// Obter todos os produtos no BD
    	$p = Produto::all();
    	// Retornar JSON
    	return ProdutoResource::collection($p);
    }

	public function apishow(Produto $produto){
    	// Retornar JSON
    	return new ProdutoResource($produto);
    }

	// Validação dos dados é realizada por ProdutoRequest. Retorna codigo de status de erro se validação falhar.
	public function apicreate(ProdutoRequest $request){
		// Criar o novo produto no BD. $request->all() obtém os dados do Json recebido
		$novo = Produto::create( $request->all());
		// retornar status
		return new ProdutoResource($novo);
	}

	// Validação dos dados é realizada por ProdutoRequest. Retorna codigo de status de erro se validação falhar.
	public function apiUpdate(ProdutoRequest $request, Produto $produto){
		// Criar o novo produto no BD. $request->all() obtém os dados do Json recebido
		$produto->update($request->all());
		// retornar status
		return new ProdutoResource($produto);
	}

	public function apiDelete(Produto $produto){
		$produto->delete();
		return response()->json(null,204);
	}
}
