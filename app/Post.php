<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

  public static function getAll(){
      return static::where('category_id', '18')->orderBy('id', 'DESC')->get();
  }

  //Encontrar curso por Slug
  public static function findBySlug($slug){
      return static::where('slug', $slug)->first();
  }

  //Buscar por categoria
  public static function findByCategory(){
      return static::where('category_id', '19')->get();
  }
}
