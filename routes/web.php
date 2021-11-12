<?php

use App\Http\Livewire\Libros\Create;
use App\Http\Livewire\Libros\Update;
use App\Http\Livewire\Libros\View;
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

Route::get('/View', View::class)->name('libros.view');

Route::get('/View/{lib?}/Update', Update::class)->name('libros.update');

Route::get('/View/Create', Create::class)->name('libros.create');