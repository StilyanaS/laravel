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
        return $this->belongsTo(Libro::class, 'book', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user', 'id');
    }
    public static function create(Request $request){
        $loan = new PrestamoModel();
        $loan->book = $request -> input('book');
        $loan-> dataLoan = $request -> input('dateLoan');
        $loan-> dateReturn = $request -> input('dateReturn');
        return $loan;
    }
}
