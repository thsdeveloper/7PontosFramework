<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
  public function books()
  {
      $books = Book::getAll();
      if ($books != null) {
          return view('book.show', ['books' => $books]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

}
