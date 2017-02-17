<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    //
    public function index()
   {
     $livros = Livro::all();
     return view('livros.index', compact('livros'));
  }

  public function cria()
  {
     return view('livros.cria');
   }

   public function armazena()
   {
     Livro::create(request()->all());

     return redirect('/livros');
  }

}
