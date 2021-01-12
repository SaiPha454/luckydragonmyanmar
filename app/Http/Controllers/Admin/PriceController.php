<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function update(Request $request){
        $request->validate([
            'cancelPrice'=>'required',
            'price'=>'required'
        ]);

        Price::find('1')->update([
            'cancelPrice'=>$request->cancelPrice,
            'price'=>$request->price
        ]);

        return redirect(route('admin.index'))->with('success','updated successfully!');
    }
}
