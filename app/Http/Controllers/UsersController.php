<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function users(){

      $users = User::paginate(1);

      return view('userview' ,['users' => $users]);

  }
}
