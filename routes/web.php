<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrudController;


Route::get('/home', function () {
    return view('welcome');
});

route::get('/index', [UserController::class, 'get'])->name('index-home');;
route::get('/create', [UserController::class, 'create'])->name('index-create');
route::post('/', [UserController::class, 'store'])->name('index-store');
route::get('/editar', [UserController::class, 'editar'])->name('index-editar');

route::fallback(function(){
    return 'Erro de localização de rota !';
});
/*
route::get('/home/{name?}', function($name){
    return view('cadastro',['cadastrar'=>$name]);
})->name('index-cadastro');

route::get('/index/{name?}', function($name = null){
    return view('editar',['editar'=>$name]);
})->name('home-editar');
*/

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
