<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

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
}
