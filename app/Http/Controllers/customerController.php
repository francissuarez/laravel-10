<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class customerController extends Controller
{
//    public function Customers(Request $request)
//    {
//
//        $users = Customer::where([
//            ['name', '!=', Null],
//            [function ($query) use ($request) {
//                if (($s = $request->s)) {
//                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
//                        ->orWhere('adress', 'LIKE', '%' . $s . '%')
//                        ->get();
//
//                }
//// return  back()->with('error','not found!');
//
//
////                else{
////
////                    back()->with('error','not found!');
////                }
//            }]
//        ])->paginate(4);
//
////        return view('goodss', ['data' => $data]);
//
//        return view('index', compact('users'));
//    }

    public function Customers(){

        $data = Customer::all();

        return view("index",['users' => $data]);

    }


    //trying code ready for use

//    public function create(Request $request ): RedirectResponse
//
//    {
//
//        $request->validate([
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
//            'password' => ['required', 'confirmed', Rules\Password::defaults()],
//        ]);
//
//        $user = User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password)
//
//        ]);
//        event(new Registered($user));
//
//        Auth::login($user);
//
//
//        return redirect('index', compact('user'));
//    }
}
