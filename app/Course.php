<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
  public static function getAll(){
      return static::get();
  }

  //Encontrar curso por Slug
  public static function findBySlug($slug){
      return static::where('slug', $slug)->first();
  }
}
