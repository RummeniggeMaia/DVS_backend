<?php

use Illuminate\Http\Request;

Route::post('login', 'Auth\UserController@login');
Route::post('register', 'Auth\UserController@register');
Route::get('auth/{provider}', 'Auth\UserController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\UserController@handleProviderCallback');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('alimentos', 'AlimentoController@index');
	Route::get('cardapios', 'CardapioController@index');
	Route::get('medidas', 'MedidaController@index');
	Route::get('items', 'ItemController@index');
});
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//
// Route::group(array('middleware' => 'auth:api', 'prefix' => 'api'), function()
// {
//     Route::get('/', function () {
//         return response()->json(
//             [
//                 'message' => 'Dieta Viver Saudavel API',
//                 'status' => 'Connected'
//             ]
//         );
//     });
//
//     Route::resource('alimentos', 'AlimentoController');
// });
//
// Route::get('/', function () {
//     return redirect('api');
// });
