<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\produController;
use App\Models\produto;

//route::resource('produtos', 'produController')->names('produto')->parameters(['produtos' => 'produto']);

Route::get('/home', function () {
    return view('welcome');
});

route::post('/', [UserController::class, 'store'])->name('index-store');
route::get('/create', [UserController::class, 'create'])->name('index-create');
route::get('/edit/{id}', [UserController::class, 'edit'])->name('index-editar');
route::put('/update/{id}', [UserController::class, 'update'])->name('edit');
//route::get('show/{idProduto}', [UserController::class, 'show'])->name('show');
route::get('consulta', [UserController::class, 'consulta'])->name('consulta');
route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');;

 

//route::resource('/editar', [ProdController::class, 'editar'])->name('index-editar');

//route::get('/delete', [UserController::class, 'delete'])->name('delete');
//route::get('/index/{id}', [UserController::class, 'show'])->name('show');

//route::get('/index', [UserController::class, 'get'])->name('index-home');;
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