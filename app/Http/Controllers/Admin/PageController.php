<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Comment;
use App\Models\HoroContent;
use App\Models\Order;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index(){
        $contentOne=HoroContent::where('id',1)->where('section','section-one')->first();
        $contentTwo=HoroContent::where('id',2)->where('section','section-two')->first();
        $comments=Comment::all();
        $userinfo=Admin::where('id',Auth::user()->id)->first();

        return view('admin.pages.index',compact('contentOne','contentTwo','comments','userinfo'));
    }

    public function product(){
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        $product=Product::all()->first();
        return view('admin.pages.product',compact('userinfo','product'));
    }

    public function pendingOrder(){
        $orders=Order::where('Status','pending')->get();
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        return view('admin.pages.orderPending',compact('orders','userinfo'));
    }

    public function confirmOrder(){
        $orders=Order::where('Status','confirm')->get();
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        return view('admin.pages.orderConfirm',compact('orders','userinfo'));
    }

    public function completedOrder(){
        $orders=Order::where('Status','completed')->get();
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        return view('admin.pages.orderCompleted',compact('orders','userinfo'));
    }

    function editcContent($sect){
        $contentText=HoroContent::where('section',$sect)->first();
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        return view('admin.pages.edit.editContent',compact('contentText','userinfo'));
    }



    function showCreateComment(){
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        return view('admin.pages.createComment',compact('userinfo'));
    }

     // change price
     function showPrice(){
        $userinfo=Admin::where('id',Auth::user()->id)->first();
        $price=Price::all()->first();
        return view('admin.pages.price',compact('userinfo','price'));
    }

    // show admin edit personal inform form
    function namesetting(){
        $info=Admin::where('id',Auth::user()->id)->first();
        return view('admin.pages.setting.changeName',compact('info'));
    }
    function Passwordsetting(){

        return view('admin.pages.setting.changePassword');
    }

    // manage admins
    function showRegister(){
        return view('admin.pages.adminManage.register');
    }
    function showManage(){
        $admins=Admin::orderBy('role','desc')->get();
        return view('admin.pages.adminManage.adminlist',compact('admins'));
    }



    function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }

}
