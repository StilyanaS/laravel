<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;
use App\Models\User;
use  Illuminate\Http\Request;
class PrestamoModel extends Model
{
    use HasFactory;
    protected $table = 'prestamos';

    public function book(){
        return $this->belongsTo(Libro::class, 'book');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user');
    }
    public static function create(Request $request){
        $loan = new PrestamoModel();
        $loan->book = $request -> input('book');
        $loan-> dateLoan = $request -> input('dateLoan');
        $loan-> dateReturn = $request -> input('dateReturn');
        $loan-> available = $request -> input('available');
        $loan-> user = 1;
        $loan->save();
        return $loan;
    }
    public static function showAll(){
       return PrestamoModel::all();
    }
    public static function findId($id){
        return PrestamoModel::find($id); 
    }
    public static function deleteLoan($id){
        $loan = PrestamoModel::find($id);
        $loan->delete();
    }
    public static function updatedLoan($id, Request $request){
        $loan = PrestamoModel::find($id);
        $loan->book = $request -> input('book');
        $loan->user = 1;
        $loan-> dateLoan = $request -> input('dateLoan');
        $loan-> dateReturn = $request -> input('dateReturn');
        $loan-> available = $request -> input('available');
        $loan->save();
    }
}
