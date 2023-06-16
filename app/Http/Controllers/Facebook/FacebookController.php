<?php

namespace App\Http\Controllers\Facebook;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{

    public function index()
    {


        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function store(Request $table)
    {


        $user = Socialite::driver('facebook')->stateless()->user();

        dd($user);


        $user = User::firstOrCreate([

            'email' => $user->email], [
            'name' => $user->name,
            'nickname' => $user->nickname,
            'password' => 'password',
        ]);
        Auth::login($user);

        return redirect('/dashboard');
    }

}
