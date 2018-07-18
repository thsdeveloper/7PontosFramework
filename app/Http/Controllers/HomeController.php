<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $postDestaque = Post::where('featured', '1')->first();
    $pareceres = Post::where('category_id', '19')->limit('3')->orderBy('created_at')->get();

    $banners = Banner::where('status', '1')->get();


    return view('home', compact('postDestaque', 'pareceres', 'banners'));
  }
}
