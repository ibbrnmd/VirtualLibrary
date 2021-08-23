<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;

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

Route::get('/index', [BooksController::class, 'index'])
    ->name('list_books');
Route::get('/create', [BooksController::class, 'create'])
    ->name('form_create_book');
Route::post('/create', [BooksController::class, 'store']);
Route::delete('/books/{id}', [BooksController::class, 'delete']);
