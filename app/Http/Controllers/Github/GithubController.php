<?php

namespace App\Http\Controllers\Github;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
   public function github(){


       $user = Socialite::driver('github')->stateless()->user();

       $user = User::updateOrCreate([

           'email' => $user->email],[
           'name' => $user->name,
           'password' => 'password'

       ]);

       Auth::login($user);

       return redirect('/dashboard');
   }
}
