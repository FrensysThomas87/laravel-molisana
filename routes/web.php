<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/prova1', function () {

    return view('prove-yields.pagina-prova');
});


Route::get('/prova2', function () {

    return view('prove-yields.prova-2');
});







Route::get('/', function () {
  $pasta = config('pasta');
    return view('pages.home-page',[
      'pastaArray' => $pasta
    ]);
});



Route::get('/product-details/{id?}', function ($id=null) {
  if(empty($id)){
    return redirect('/');
  }
    $pasta = config('pasta');
    return view('pages.product-details',['idProduct' => $id], ['pastaArray' => $pasta]);
});
