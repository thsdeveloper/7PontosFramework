<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function profissionais(){
      $users = User::getAll();
      if ($users != null) {
          return view('users.show', ['users' => $users]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }

  public function profissional($id){
      $user = User::findById($id);
      if ($user != null) {
          return view('users.item', ['user' => $user]);
      }
      return 'Ocorreu um error, estamos arrumando!';
  }
}
