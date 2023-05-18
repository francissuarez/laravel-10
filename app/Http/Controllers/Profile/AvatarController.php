<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateAvatarRequest;
use App\Models\User;

//use http\Env\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request)
    {

        $path = Storage::disk('public')->put('avatar', $request->file('avatar'));

//   $path = $request->file('avatar')->store('avatars','public');

        if ($oldimage = $request->user()->avatar) {

            Storage::disk('public')->delete($oldimage);


        }


        auth()->user()->update(['avatar' => $path]);


//<----------------- optional for image upload- ------------->

//        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
//        $request->avatar->move(public_path('avatars'), $avatarName);
//        Auth()->user()->update(['avatar'=>$av00000000000000000000000000000000000000000atarName]);

//   <--------------------end------------------->

        return redirect(route('profile.edit'))->with('success', 'You have successfully upload image');
//        return back()->with('success','You have successfully upload image.');

    }

}
