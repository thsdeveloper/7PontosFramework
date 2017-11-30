<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Book extends Model
{
  public static function getAll(){
      return static::get();
  }

}
