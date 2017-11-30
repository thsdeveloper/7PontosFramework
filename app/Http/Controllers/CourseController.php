<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
  public function courses(){
      $courses = Course::getAll();
      if ($courses != null) {
          return view('courses.show', ['courses' => $courses]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

  public function show($slug){
      $curso = Course::findBySlug($slug);
      if ($curso != null) {
          return view('courses.item', ['curso' => $curso]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

}
