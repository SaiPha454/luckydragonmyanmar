<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HoroContent;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    function updateContent(Request $request){
        $request->validate([
            'content'=>'required'
        ]);
        $Content = HoroContent::where('section',$request->section)->first();
        $Content->content=$request->content;
        $Content->save();
        return redirect(route('admin.index'))->with('success','Updated successfully');
}
}
