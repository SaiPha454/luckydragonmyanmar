<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\HoroContent;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    public function index(){

        return view('user.index');
    }

    public function suggest($card_one,$card_two,$card_three){
        $cardNames=array(
            '1'=>'မျှော်စင်',
            '2'=>'ဧကရာဇ်ဘုရင်',
            '3'=>'ဘုန်းကြီး',
            '4'=>'သီလရှင်',
            '5'=>'စစ်ရထား','6'=>'ကံကြမ္မာလှည့်ဘီး','7'=>'ငိုကြွေးနေသောလမင်း','8'=>'မှော်ဆရာ','9'=>'ကမ္ဘာလောက','10'=>'ရသေ့',
            '11'=>'ဇောက်ထိုးဆွဲခံရသူ', '12'=>'အရူး ','13'=>'စွမ်းအားရှင်','14'=>'နေသူရိန်','15'=>'ရှင်ပြန်ထမြောက်ခြင်း','16'=>'စောင့်ထိန်းခြင်',
            '17'=>'ချစ်သူများ','18'=>'ဓူဝံကြယ်','19'=>'ဘုန်းကြီး','20'=>'ငိုကြွေးနေသောလမင်း',
        );
        $firstContent= HoroContent::where('section','section-one')->first()->content;
        $secondContent= HoroContent::where('section','section-two')->first()->content;
        $comments=Comment::all();
        $price=Price::find('1')->first();
        $product=Product::all()->first();
        return view('user.suggest',
        compact('card_one','card_two','card_three','firstContent','secondContent','cardNames',
        'comments','price','product'));
    }

    public function privacy(){
        return view('user.privacy');
    }
}
