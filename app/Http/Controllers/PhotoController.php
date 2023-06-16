<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use OpenAI\Laravel\Facades\OpenAI;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, string $id)
    {



        $path = Storage::disk('public')->put('avatar', $request->file('avatar'));

//   $path = $request->file('avatar')->store('avatars','public');

        if ($oldimage = $request->user()->avatar) {

            Storage::disk('public')->delete($oldimage);

        }

       $like =  auth()->user()->update(['avatar' => $path]);

//        return redirect(route('profile.edit'))->with('success', 'You have successfully upload image');
        return response()->json(

            [
                'like' => $like

            ], 302
        );

    }





    public function Generate(Request $request){

        $result = OpenAI::images()->create([

            "prompt"=> "create avatar for user with cool style animated in tech world",
            "n"=> 1,
            "size"=> "256x256"

        ]);

// an open-source, widely-used, server-side scripting language.



        $content = file_get_contents($result->data[0]->url);

        $filename = Str::random(2);


        $nice = Storage::disk('public')->put("avatar/$filename.jpg",$content );


        if ($oldimage = $request->user()->avatar) {

            Storage::disk('public')->delete($oldimage);


        }
        auth()->user()->update(['avatar' => "avatar/$filename.jpg"]);


        return response()->json([
            "result" => $result,

        ],302



        );



//        return redirect(route('profile.edit'))->with('success', 'You have successfully generate AI image');



    }














    /**
     * Remove the specified resource from storage.
     */









    public function destroy(string $id)
    {
        //
    }
}
