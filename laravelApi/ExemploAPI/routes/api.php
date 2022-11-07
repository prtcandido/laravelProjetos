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

use App\Models\Computador;
use App\Http\Resources\ComputadorResource;
use App\Http\Requests\ComputadorRequest;
Route::get('computador',function(){
    return ComputadorResource::collection(Computador::all());
});

Route::post('computador',function(ComputadorRequest $request){
    $c = Computador::create($request->all());
    return new ComputadorResource($c);
});

Route::put('computador/{id}',function(ComputadorRequest $request, Computador $computador){
    $c = $computador->update($request->all());
    return new ComputadorResource($c);
});

Route::get('computador/{computador}',function(Computador $computador){
    return new ComputadorResource($computador);
});
