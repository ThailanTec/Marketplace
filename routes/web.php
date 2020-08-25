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

    // Criar uma loja

 #   $user = App\User::find(10);
 #   $store =  $user->store()->create([
 #       'name' => 'Loja Teste',
 #       'description'=>' Loja Teste dasas',
 #      'mobile_phone' => 'XXX-XXXX-XXX',
 #       'phone' => 'XX-XXXX-XXX',
 #       'slug' => 'Loja-Teste'
 #  ]);
#
 #   dd($store);
    // Criar um produto para uma loja

# $store = App\Store::find(41);
# $product =  $store->products()->create([
#     'name'=>'Celular LG K40S',
#     'description' => 'Melhor celular custo beneficio',
#     'body'=>'Qualquer coisa',
#     'price' => 2900.90,
#     'slug'=>'celular-lg-k40s'
# ]);

# dd($product);

    // Criar Categorias

//   App\Category::create([
//       'name'=>'Celular',
//       'descriptions' => null,
//       'slug'=>'celular'
//   ]);
//   App\Category::create([
//       'name'=>'Games',
//       'descriptions' => null,
//       'slug'=>'games'
//   ]);

    //  Adicionar um produto para uma categoria.

    $product = App\Product::find(49);
    $product->categories()->attach([1]);


    return \App\Category::all();


});
