<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Resources\DepartamentoResource;
use App\Models\Departamento;

Route::get('departamento/{id}',
  function($id){
    return new DepartamentoResource(Departamento::find($id));
  }
);

use App\Http\Controllers\ProdutoController;
Route::get('produto',[ProdutoController::class,'apiindex']);
Route::get('produto/{produto}',[ProdutoController::class,'apishow']);
Route::post('produto',[ProdutoController::class,'apicreate']);
Route::put('produto/{produto}',[ProdutoController::class,'apiupdate']);
Route::delete('produto/{produto}',[ProdutoController::class,'apidelete']);