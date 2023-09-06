<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\PrestamoModel;

class LibroController extends Controller
{
    public function formAddBook(Request $request) {
       $isbn = Libro::create($request);
        return view('bookAdded', compact('isbn'));
    }
    public function updateBook($id){
        $book = Libro::findId($id);
        Session::put('id', $id);
        return view('editBook', compact('book'));
    }
    public function updatedBook(Request $request){
        $id = Session::get('id');
        Libro::updatedBook($id, $request);
        return Redirect::to('/booksList');
    }
    public function deleteBook($id){
        Libro::destroy($id);
        return Redirect::to('/booksList');
        //self::showBookList();
    }
    public function addBook(){
        $title = 'Añadir libro';
        return view('addBook', compact('title'));
    }
    public function showBookList(){
        $books = Libro::showAll();
        return view('bookList')->with('books', $books);
    }
    public function showBook($id){
        $book = Libro::findId($id);
        return view('bookDetail', compact('book'));
    }
    public function testLoan(){
        dd(PrestamoModel::find(1));
    }
    public function newLoan($id){
        $book = Libro::findId($id);
        return view('newLoan', compact('book'));
    }
    public function loanCreated(Request $request){
        $loan = PrestamoModel::create($request);
        return view('loanCreated', compact('loan'));
    }
}

