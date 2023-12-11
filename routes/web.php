<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\EventController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ConvidadoController;
use App\Http\Controllers\RecomendacoesController;
use App\Http\Controllers\FeedbackController;

Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::get('/', [EventController::class, 'index']);


Route::any('/comidas/create', [FoodController::class, 'create'])->middleware('auth');

Route::get('/confirmar-presenca/create/{id}', [ConvidadoController::class, 'mostrarFormulario'])->name('confirmar-presenca')->middleware('auth');
Route::post('/confirmar-presenca/{id}', [ConvidadoController::class, 'salvarConvidado'])->middleware('auth');
Route::get('/convidados-confirmados', [ConvidadoController::class, 'listaConfirmados'])->middleware('auth');
Route::get('/convidados-confirmados/{eventId}', [ConvidadoController::class, 'listaConfirmados'])->name('convidados-confirmados');

Route::any('comidas', [FoodController::class, 'store'])->name('comidas');
Route::get('comidasdashboard', [FoodController::class, 'index']);
Route::get('comidas/create', [FoodController::class, 'create'])->middleware('auth');
Route::any('comidas/edit/{id}', [FoodController::class, 'edit'])->middleware('auth');
Route::put('/comidas/update/{id}', [FoodController::class, 'update'])->middleware('auth');
Route::delete('/comidas/{id}', [FoodController::class, 'destroy'])->middleware('auth');


Route::post('agenda', [FoodController::class, 'store'])->middleware('auth');
Route::get('agendadashboard', [FoodController::class, 'index'])->middleware('auth');
Route::get('agenda/create', [FoodController::class, 'create'])->middleware('auth');
Route::get('agenda/update/{id}', [FoodController::class, 'update'])->middleware('auth');
Route::get('agenda/edit/{id}', [FoodController::class, 'edit'])->middleware('auth');


Route::get('recomendacoes', [RecomendacoesController::class, 'index'])->name('recomendacoes.index')->middleware('auth');
Route::get('recomendacoes/create', [RecomendacoesController::class, 'create'])->name('recomendacoes.create')->middleware('auth');
Route::post('recomendacoes', [RecomendacoesController::class, 'store'])->name('recomendacoes.store')->middleware('auth');
Route::get('recomendacoes/{id}/edit', [RecomendacoesController::class, 'edit'])->name('recomendacoes.edit')->middleware('auth');
Route::put('recomendacoes/{id}', [RecomendacoesController::class, 'update'])->name('recomendacoes.update')->middleware('auth');
Route::delete('recomendacoes/{id}', [RecomendacoesController::class, 'destroy'])->name('recomendacoes.destroy')->middleware('auth');
Route::get('recomendacoes/{id}', [RecomendacoesController::class, 'show'])->name('recomendacoes.show')->middleware('auth');


Route::get('/feedback/index', [FeedbackController::class, 'index'])->name('feedbacks.index');
Route::get('/feedback', [FeedbackController::class, 'create'])->middleware('auth');
Route::post('/feedback', [FeedbackController::class, 'store'])->middleware('auth');





Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/reserva', function () {
    return view('reserva');
});

Route::get('/contato', function () {
    return view('contato');
});


Route::get('/events/contato', function () {
    return view('contato');
});

Route::get('/admindashboard', function () {
    
    if (Auth::user()->acesso == 'd' || Auth::user()->acesso == 'b' || Auth::user()->acesso == 'c'){
    return view('admindashboard');
    }else {
        return view('semautorizacao');
    }
    
    
});