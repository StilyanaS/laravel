<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addBook', [LibroController::class,'addBook']);
Route::post('/bookAdded', [LibroController::class,'formAddBook']) -> name('bookAdded');
Route::get('/updateBook/{id}', [LibroController::class,'updateBook']) -> name('updateBook');
Route::post('/updatedBook', [LibroController::class,'updatedBook'])-> name('updatedBook');
Route::get('/deleteBook/{id}', [LibroController::class,'deleteBook']);
Route::get('/booksList', [LibroController::class,'showBookList']);
Route::get('/bookdetails/{id}', [LibroController::class,'showBook']);
Route::get('/test', [LibroController::class,'testLoan']);

Route::get('/newLoan', [PrestamoController::class,'newLoan']);
Route::post('/loanCreated', [PrestamoController::class,'loanCreated'])-> name('loanCreated');
