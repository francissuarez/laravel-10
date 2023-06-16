<?php

namespace App\Http\Controllers\Google;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoogleValidation;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function index()
    {


        return Socialite::driver('google')->stateless()->redirect();

    }

    public function store()
    {

        $user = Socialite::driver('google')->stateless()->user();


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
