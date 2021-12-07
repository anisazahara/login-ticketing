<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AgentController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('client', function () { return view('client/client'); })->middleware(['checkRole:client,admin']);
Route::get('agent', function () { return view('agent/agent'); })->middleware(['checkRole:agent,admin']);

// client
Route::get('/client',[ClientController::class,'index'])->name('home');
Route::get('/form/client',[ClientController::class,'tambah'])->name('input');
Route::post('/client',[ClientController::class,'simpan'])->name('simpan');




// Agent
Route::get('/agent',[AgentController::class,'index'])->name('home');
Route::get('/form',[AgentController::class,'create'])->name('view');
Route::delete('/hapus{id}',[AgentController::class,'delete']);
Route::get('oneToMany2/{nama}', 'OneToManyController@olahTabelUserPost');
// Route::post('/agent',[AgentController::class,'simpanagent'])->name('simpan');
// Route::get('/agent/form/{id}',[AgentController::class,'edit'])->name('edit');
Route::put('/update/{id}',[AgentController::class,'update'])->name('update');








