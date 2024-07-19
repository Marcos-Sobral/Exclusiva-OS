<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/oi', function () {
    return view('welcome');
});


    Route::get('/', function () { return view('home');})->name('home');
    route::get('/create', [UserController::class, 'create'])->name('index-create');
    route::post('/create', [UserController::class, 'store'])->name('index-store');
    route::get('/edit/{id}', [UserController::class, 'edit'])->name('index-editar');
    route::put('/update/{id}', [UserController::class, 'update'])->name('edit');
    route::get('consulta', [UserController::class, 'consulta'])->name('consulta');
    route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::get('/sobre', function () { return view('welcome');});
    