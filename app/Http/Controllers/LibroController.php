<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    public function addBook() {
        $title = 'Título';
        $author = 'Autor';
        $post_year= 'Año Publicación';
        $genre = 'Género';
        $available = 'Disponible';
        Libro::create($title, $author, $post_year, $genre, $available);

    }
}
