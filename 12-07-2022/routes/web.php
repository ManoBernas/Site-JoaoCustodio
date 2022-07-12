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
Route::get('/', function () {
    return view('home');
});
// Route::get('/2', function () {
//     return view('home2');
// });
// Route::get('/3', function () {
//     return view('home');
// });




Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'index'])->middleware('auth')->name('produtos');
Route::get('/encomendas', [App\Http\Controllers\EncomendaController::class, 'index'])->name('encomendas');
Route::get('/projetos', [App\Http\Controllers\ProjetoController::class, 'index'])->middleware('auth')->name('projetos');
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->middleware('auth')->name('portfolio');
Route::post('/produtos', [App\Http\Controllers\ProdutoController::class, 'store']);
Route::post('/encomendas', [App\Http\Controllers\EncomendaController::class, 'store']);
Route::post('/projetos', [App\Http\Controllers\ProjetoController::class, 'store']);
Route::post('/portfolio', [App\Http\Controllers\PortfolioController::class, 'store']);
Route::get('/produtos/create', [App\Http\Controllers\ProdutoController::class, 'create'])->middleware('auth')->name('produtos.create');
Route::get('/encomendas/create', [App\Http\Controllers\EncomendaController::class, 'create'])->middleware('auth')->name('encomendas.create');
Route::get('/projetos/create', [App\Http\Controllers\ProjetoController::class, 'create'])->middleware('auth')->name('projetos.create');
Route::get('/portfolio/create', [App\Http\Controllers\PortfolioController::class, 'create'])->middleware('auth')->name('portfolio.create');
Route::get('/produtos/{produto}/edit', [App\Http\Controllers\ProdutoController::class, 'edit']);

/* Route::get('/carros', [App\Http\Controllers\HomeController::class, 'carros']);
Route::get('/motas', [App\Http\Controllers\HomeController::class, 'motas']);
Route::get('/pessoas', [App\Http\Controllers\HomeController::class, 'pessoas']); */


