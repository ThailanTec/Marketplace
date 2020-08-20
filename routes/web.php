<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function (){

  //  $products = App\Product::all();

    $user = User::find(1);
    $user->name = 'Odair';

    $user->save();
    //  return User::all(); // Retorna todos os user do banco
   // return User::where('name', 'Odair')->get(); // Retorna todos os user com o nome em questão.
  //  return $user->save();

    return User::paginate(10); // Para retorna a quantidade de itens por pagina e passando quantos itens queremos.
});
