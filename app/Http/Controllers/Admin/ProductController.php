<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function upload(Request $request){
        if($request->file('product-image')){
            $rescentProduct=Product::all()->first();

            $imgName=explode('/',$rescentProduct->image);
            $imgName=$imgName[2];
            Storage::disk('product')->delete($imgName);
            $rescentProduct->delete();

            $file=$request->file('product-image');
            $fileName=uniqid(time()).$file->getClientOriginalName();
            $filepath='appimg/product/'. $fileName;
            $file->storeAs('product',$fileName);
            Product::create([
                'image'=>$filepath
            ]);
        }

        return redirect(route('admin.index'))->with('success','Product uploaded successfully');
    }
}
