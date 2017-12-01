<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller{

  public function posts(){
      $posts = Post::getAll();
      if ($posts != null) {
          return view('posts.show', ['posts' => $posts]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

  public function pareceres(){
      $posts = Post::findByCategory();
      if ($posts != null) {
          return view('posts.show', ['posts' => $posts]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

  public function parecer($slug){
      $post = Post::findBySlug($slug);
      if ($post != null) {
          return view('posts.item', ['post' => $post]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

  public function show($slug){
      $post = Post::findBySlug($slug);
      if ($post != null) {
          return view('posts.item', ['post' => $post]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }
}
