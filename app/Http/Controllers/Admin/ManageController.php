<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function makeSuper($id){
        Admin::find($id)->update([
            'role'=>'superadmin'
        ]);
        return back();
    }

    public function delete($id){
        if(Auth::user()->id ==$id){
            Admin::find($id)->delete();
            return redirect(url('/'));
        }
        Admin::find($id)->delete();
        return back();
    }
}
