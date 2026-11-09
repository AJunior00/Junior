<?php

use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\HelpdeskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/helpdesk', [HelpdeskController::class, 'index'])->name('helpdesk');

Route::post('/helpdesk', [HelpdeskController::class, 'salvar'])->name('helpdesk.salvar');

Route::get('/http', [HttpController::class, 'index'])->name('http');

Route::get('/idade', [IdadeController::class, 'index'])->name('idade');

Route::get('/jogos', [JogosController::class, 'index'])->name('jogos');

Route::get('/json', [JsonController::class, 'index'])->name('json');

Route::get('/login-basico', [HelpdeskController::class, 'index'])->name('helpdesk.');

Route::post('/notas-desafio', [NotasdesafioController::class, 'salvar'])->name('notas-desafio.salvar');

Route::get('/notas', [NotasController::class, 'index'])->name('notas');

Route::get('/poo', [PooController::class, 'index'])->name('poo.');

Route::get('/poo2', [Poo2Controller::class, 'index'])->name('poo2');

Route::get('/test-post', [TestepostController::class, 'index'])->name('teste-post');


?>