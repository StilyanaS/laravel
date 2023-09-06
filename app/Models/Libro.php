<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Http\Request;
use App\Models\PrestamoModel;

class Libro extends Model
{
    use HasFactory;

    public function loans(){
        return $this->hasMany(PrestamoModel::class, 'book', 'id');
    }
    public static function create(Request $request){
        $libro = new Libro();
        $libro->title = $request -> input('title');
        $libro->author = $request -> input('author');
        $libro->post_year = $request -> input('post-year');
        $libro->genre = $request -> input('genre');
        $libro->isbn = $request -> input('isbn');
        $libro->available = 'sí';
        $libro->save();
        return $libro->isbn;
    }
    public static function updatedBook($id, Request $request){
        $libro = Libro::find($id);
        $libro->title = $request -> input('title');
        $libro->author = $request -> input('author');
        $libro->post_year = $request -> input('post-year');
        $libro->genre = $request -> input('genre');
        $libro->isbn = $request -> input('isbn');
        $libro->available = $request -> input('available');
        $libro->save();
    }
    public static function modify($id){
        $book = Libro::find($id);
        $book->save();
    }
    public static function destroy($id){
        $book = Libro::find($id);
        $book->delete();
    }
    public static function showAll(){
        return Libro::all();
    }
    public static function findId($id){
        return Libro::find($id); 
    }
    public static function addLoan($id, Request $request){
        $loans = PrestamoModel::all();
        if(isset($loans)){
           foreach ($loans as $loan){
              if ($loan->book->title == 'Title'){
                //return $loan->book;
                return 'se ha encontrado el libro';
              }
           }
           return 'el libro no está prestado';
        } else {
            return 'De momento no hay ningún prestamo';
        }
    }
}
