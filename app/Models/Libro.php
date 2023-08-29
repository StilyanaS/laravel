<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Http\Request;
class Libro extends Model
{
    use HasFactory;

    public function loan(){
        return $table->belongsTo(PrestamoModel::class,'book','id');
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
        $libro = Libro::find($id);
        $libro->save();
    }
    public static function destroy($id){
        $libro = Libro::find($id);
        $libro->delete();
    }
    public static function showAll(){
        return Libro::all();
    }
    public static function findId($id){
        return Libro::find($id); 
    }
}
