<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'get']);
Route::get('/cadastro', [UserController::class, 'get']);
//Route::redirect('/usuario','/', 301);

/*
route::($url, $callback); // trazer registro 
route::post($url, $callback); // inserção de registro
route::put($url, $callback); // edição de registro 
route::patch ($url, $callback); // edição de registro
route::delete($url, $callback); //exclusão de registro, é obrigatório ter o tooker CRF 

                 rota chamada | para onde ela vai | sei lá 
Route::redirect(     ' /  ',    'usuario',           301); //redirecionamento de rotas


Parametro // sub abas como exemplo Masculino -> Adulto -> Camisa -> social -> manga longa -> estampada 

Route::get('usuario/{cadastro}', function ($cadastrp) {
    return view 'welcome'. $cadastro;
});

*/
