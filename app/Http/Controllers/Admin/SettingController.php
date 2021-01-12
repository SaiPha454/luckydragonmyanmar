<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    function updateName(Request $request){
        $request->validate([
            'name'=>'required'
        ]);

        Admin::where('id',Auth::user()->id)->update([
            'Name'=>$request->name
        ]);
        return redirect(route('admin.index'))->with('success','Name updated successfully');
    }

    function updatePassword(Request $request){
        $request->validate([
            'currentPassword'=>'required',
            'newPassword'=>'required'
        ]);

        if(Hash::check($request->currentPassword, Auth::user()->password) ){
            Admin::where('id',Auth::user()->id)->update([
                'password'=> Hash::make($request->newPassword)
            ]);
            Auth::logout();
            return redirect(route('login.show'));
        }else{
            return back()->with('customError','Please check your current password');
        }
    }
}
