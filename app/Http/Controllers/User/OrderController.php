<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request){
        $request->validate([
            'fullname'=>'required',
            'phonenumber'=>'required|min:7',
        ]);

        Order::create([
            'Status'=>'pending',
            'Phone'=>$request->phonenumber,
            'Name'=>$request->fullname
        ]);

        return redirect(url('/'))->with('orderSuccess','Order is register successfully!');
    }
}
