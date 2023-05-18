<?php

namespace App\Http\Controllers;

use App\Models\Burger;
use App\Models\Student;
use Illuminate\Http\Request;

class BurgerController extends Controller
{

    public function burger(Request $request){

        $burger = new Burger();
        $burger ->name=$request->name;
        $burger ->age=$request->age;
        $burger-> save();
        return response()->json([

            'burger' => $burger
        ] , 200);
    }


    public function index(Request $request){
        $students = Student::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();

                }

            }]
        ])->paginate(2);

        return response()->json(
            [
                'students'=>$students,

            ]


        ,200);
//        return view('dashboard')->with('students', $students);
    }




    //
}
