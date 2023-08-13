<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public static function create($title, $author, $post_year, $genre, $available){
        $libro = new Libro();
        $libro->title = $title;
        $libro->author = $author;
        $libro->post_year = $post_year;
        $libro->genre = $genre;
        $libro->available = $available;
        $libro->save();
    }
}
