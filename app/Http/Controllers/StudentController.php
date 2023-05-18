<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Student;
//use Illuminate\Http\Request;
//use Illuminate\View\View;
//
//class StudentController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     */
//    public function index(): View
//    {
//        $data = Student::paginate(1);
//        return view('home' ,['data' => $data]);
//        //
//    }
//
//    public function xample(): View
//    {
//        $student = Student::all();
//
//        return view('student.xample')->with('student',$student);
//
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(string $id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(string $id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, string $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(string $id)
//    {
//        //
//    }
//}

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function index(Request $request): View
    {
//        $students = Student::all();
//        return view ('students.index')->with('students', $students);
//done
        $students = Student::where([
            ['name', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('name', 'LIKE', '%' . $s . '%')
                        ->orWhere('email', 'LIKE', '%' . $s . '%')
                        ->get();
                }

            }]
        ])->paginate(4);

        return view('students.index')->with('students', $students);
//        return view('dashboard')->with('students', $students);
    }


    public function create(): View
    {
        return view('students.create');
    }


//done
    public function store(StorePostRequest $request): RedirectResponse


    {




//        $request->validate([
//            'email'=>'required|email|unique:students',
//            'name' => 'required|max:255',
//            'address' => 'required|max:255',
//            'mobile' => 'required|max:255',
//        ]);

//        $this->validate($request, [
//            'email'=>'required|email|unique:users,email,'.$id,
//            'name' => 'required|max:255',
//            'address' => 'required|max:255',
//            'mobile' => 'required|max:255',
//        ]);


        $request->old('email');

        $customer = new Student;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->mobile=$request->mobile;
        $customer->email=$request->email;
        $customer->save();
//        dd($customer);



//
//            $input = $request->all();
//           $var=  Student::create($input);

//        dd($var);



        return redirect('student')->with('flash_message', 'Student Addedd!');
    }


//done
    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

//    public function edite(): View
//    {
//
//        return view('students.index');
//    }

    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }


    public function update(Request $request, string $id): RedirectResponse


    {


        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);


        // $_SESSION['_flash'] = "the update seccesss";


//        return redirect('student')->with([
//            'status' => 200,
//            'message' => 'Successfully updated the users roles'
//        ]);

        return redirect('student')->with('flash_message', 'student Updated!');
    }

//    public function destroy($id): RedirectResponse
//    {
//        $var = Student::find($id);
//        $var->destroy();
//
//        return redirect('student')->with('flash_message', 'Student deleted!');
//
//    }

    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);

        return redirect('student')->with('flash_message', 'The student was deleted');
    }
}
