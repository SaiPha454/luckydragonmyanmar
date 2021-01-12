<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function confirm(Request $request,$id){
        $order=Order::find($id);
        $order->update([
            'Status'=>'confirm'
        ]);
        return redirect(route('admin.order.pending'));
    }

    public function complete(Request $request,$id){
        $order=Order::find($id);
        $order->update([
            'Status'=>'completed'
        ]);
        return redirect(route('admin.order.pending'));
    }

    public function delete(Request $request,$id){
        $order=Order::find($id)->delete();
        return redirect(route('admin.order.pending'));
    }
}
