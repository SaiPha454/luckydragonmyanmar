<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{
    function createComment(Request $request){

        $request->validate([
            'name'=>'required',
            'date'=>'required',
            'profile'=>'required',
            'comment'=>'required'
        ]);
        if($request->file('profile')){
            $imgfile=$request->file('profile');
            $fileName=uniqid(time()).$imgfile->getClientOriginalName();
            $imgfile->storeAs('comments',$fileName);

            $filePath='appimg/comment/'. $fileName;


            $comment=Comment::create([
                'Name'=>$request->name,
                'image'=>$filePath,
                'comment'=>$request->comment,
                'date'=>$request->date,
            ]);

        }
        return redirect(route('admin.index'))->with('success','Comment is created successfully');
    }

    public function delete($id){
        $comment =Comment::find($id);


        $imgName=explode('/',$comment->image);
        $imgName=$imgName[2];
        Storage::disk('commentimg')->delete($imgName);
        $comment->delete();
        return redirect(route('admin.index'))->with('success','Comment is deleted successfully');
    }
}
