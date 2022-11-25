<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\PublicsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DicaController;

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

Route::get('/', [PrincipalController::class, 'index'])->name('principal');
Route::get('/', [PrincipalController::class, 'listar'])->name('principal');

Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');



Route::get('listpublications', [PublicsController::class, 'listar'])->name('admin.listpublications');
Route::get('addpublication', [PublicsController::class, 'publication'])->name('admin.publication');
Route::post('addpublication', [PublicsController::class, 'add'])->name('admin.addpublication');
Route::get('/listpublications/excluir/{id}', [PublicsController::class, 'excluir'])->name('admin.listpublication.excluir');

Route::get('dica', [DicaController::class, 'dica'])->name('admin.dica');
Route::post('dica', [DicaController::class, 'add'])->name('admin.adddica');
Route::get('/dicas', [PublicsController::class, 'listardicas'])->name('dicas');
