<?php

use App\Http\Livewire\Servicios;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {

    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/servicios', Servicios::class);
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::get('/pagina', function () {
    return view('pagina.index');
})->name('dash');

Route::get('/contrasenia', function () {
    return view('contrasenia.index');
})->name('dash');

