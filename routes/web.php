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

Route::get('/newLoan/{id}', [LibroController::class,'newLoan']);
Route::post('/loanCreated', [LibroController::class,'loanCreated'])-> name('loanCreated');
Route::get('/allLoans',[PrestamoController::class,'showAll']);
Route::get('/loanDetail/{id}',[PrestamoController::class,'loanDetail']);
Route::get('/updateLoan/{id}',[PrestamoController::class,'updateLoan'])-> name('updateLoan');
Route::post('/updatedLoan',[PrestamoController::class,'updatedLoan'])-> name('updatedLoan');
Route::get('/deleteLoan/{id}', [PrestamoController::class,'deleteLoan']);
Route::get('/addLoan', [PrestamoController::class,'addLoan']);