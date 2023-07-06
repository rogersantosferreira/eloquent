<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\AlunoController;

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
Route::get('/', function() {
    return view('welcome');
});

Route::get('/alunos',               [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create',        [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos/create',       [AlunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos/edit/{id}',     [AlunoController::class, 'edit'])->name('alunos.edit');
Route::post('/alunos/update/{id}',  [AlunoController::class, 'update'])->name('alunos.update');
Route::get('/alunos/delete/{id}',   [AlunoController::class, 'delete'])->name('alunos.delete');

Route::get('/teste', [TesteController::class, 'teste'])->name('teste');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
