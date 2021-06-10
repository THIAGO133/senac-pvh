<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $name   = 'Prof. thiago nunes';
    return view('dashboard', ['name' => $name] );
})->middleware(['auth'])->name('dashboard');

Route::get('/cadastrar-banner', function () {
    return view('cadastrar-banner');
})->middleware(['auth'])->name('cadastrar-banner');



// Rotas do Banner
Route::post('/store-banner', [BannerController::class, 'store'])->middleware(['auth'])->name('store-banner');
Route::get('/listar-banner', [BannerController::class, 'index'])->middleware(['auth'])->name('listar-banner');

// rotas de clientes controller
Route::get('/cadastrar-cliente', [ClienteController::class, 'create'])->middleware(['auth'])->name('cadastrar-cliente');
Route::post('/cliente-store', [ClienteController::class, 'store'])->middleware(['auth'])->name('cliente-store');
Route::get('/listar-cliente', [ClienteController::class, 'index'])->middleware(['auth'])->name('listar-cliente');



// Rotas do Serviço
//  Route::post('/store-servico', [ServicoController::class, 'store'])->middleware(['auth'])->name('store-servico');
//  Route::get('/listar-servico', [ServicoController::class, 'index'])->middleware(['auth'])->name('listar-servico');

// Route::get('/cadastrar-servico', function () {
//    return view('cadastrar-servico');
//})->middleware(['auth'])->name('cadastrar-servico');

// 




require __DIR__.'/auth.php';
