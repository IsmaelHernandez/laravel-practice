<?php

use Illuminate\Support\Facades\Route;
//importar componente 
use App\Http\Livewire\ShowPosts; //lo ocupamos como un controlador

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', ShowPosts::class)->name('dashboard');


