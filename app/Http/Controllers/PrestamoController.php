<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrestamoModel;
use App\Models\Libro;
class PrestamoController extends Controller
{
    public function newLoan(){
        return view('newLoan');
    }
    public function addLoan(){
        $books = Libro::all();
        foreach($books as $book){
            if($book->title == 'Title'){  
                if ($book->available == 'sí'){
                    PrestamosModel::create($book->title);
                    return view('loanCreated')->with('book', $book->title);
                } else {
                   // return 'El libro no está disponible';
                   return view('hola');
                }
            }
        }
    }
    public function loanCreated(Request $request){
        $loan = PrestamoModel::create($request);
        return view('loanCreated', compact('loan'));
    }
}
