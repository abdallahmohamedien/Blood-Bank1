<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use File;


class ProfileController extends Controller
{
    public function index($id){
        $user = User::find($id);
        return view('user.profile.view-profile' , compact('user'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.profile.edit-profile' , compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->blood = $request->blood;
        $user->phone = $request->phone;
        $user->address = $request->email;
        $user->district = $request->district;
        $user->date_of_birth = $request->date;


        if($request->hasfile('photo')){
            if(File::exists('public/images/avatar/' .$user->photo)){
                File::delete('public/images/avatar/' .$user->photo);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().$user->name . '.' . $extension;
            $file->move('public/images/avatar/',$filename);

            $user->photo = $filename;
        }
        $user->save();
        return redirect()->route('profile.index', $id)->with('success','profile updated successfully!!');
    }
}
