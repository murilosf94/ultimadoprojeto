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


Route::post('/comidas', [FoodController::class, 'store']);
Route::any('/comidas/create', [FoodController::class, 'create'])->middleware('auth');

Route::get('/confirmar-presenca/create/{id}', [ConvidadoController::class, 'mostrarFormulario'])->name('confirmar-presenca')->middleware('auth');
Route::post('/confirmar-presenca/{id}', [ConvidadoController::class, 'salvarConvidado'])->middleware('auth');
Route::get('/convidados-confirmados', [ConvidadoController::class, 'listaConfirmados'])->middleware('auth');
Route::get('/convidados-confirmados/{eventId}', [ConvidadoController::class, 'listaConfirmados'])->name('convidados-confirmados');



Route::post('comidas', [FoodController::class, 'store'])->name('comidas');
Route::get('comidas/create', [FoodController::class, 'create']);
Route::get('comidas/update', [FoodController::class, 'update']);






Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/reserva', function () {
    return view('reserva');
});

Route::get('/festas', function () {
    return view('festas');
});


Route::get('/comidas', function () {
    return view('comidas.comidas');
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

