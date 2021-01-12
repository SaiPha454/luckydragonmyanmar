@extends('layout.app')

@section('content')


{{-- Loading content --}}
<div class="container" style="display: block" id="loadingContent">
    <div style="padding-top: 10px">
        <strong class="sg-header-text" style="color: #DDC091">ခဏလေး စောင့်ဆိုင်းပေးပါနော် ၊ ခု မိတ်ဆွေ ရွေးထားတဲ့ တားရော့ ၃ ကဒ်ကို ပြပါတော့မယ် ...</strong>
    </div>
    <div style='text-align:center;padding-top:20px'>
        <img src="{{asset('appimg/cards/loading.gif')}}" style="border-radius: 50%;max-width:60px" alt="">
    </div>
</div>


{{-- main -content --}}
    <div class="container" style="display: none" id="sg-main-content" >
        <div style="padding-top: 10px">
            <strong class="sg-header-text">မိတ်ဆွေရဲ့ ရှေ့ ဖြစ် ဟောကြားမှု့လေးဟာဆိုရင်ဖြင့် အဆင်သင့်ဖြစ်နေပါပြီ။</strong>
        </div>
        <div class="mt-3">
            <p class="body-text">
                မိတ်ဆွေရဲ့ ကံကြမာ တားရော့ကဒ်ကလေး ၃ ကဒ်ကတော့ ...
            </p>
        </div>
        <div style="padding-top: 3px">
            <img src="{{asset('appimg/boy.png')}}" class="abhigya-img" alt="Abhigya">
        </div>

        {{-- chosen cards --}}
        <div class="mt-5">
            <div style="text-align: center">
                <strong class="sg-header-text">မိတ်ဆွေရွေးထားတဲ့ ကဒ်များ </strong>
            </div>
            <div class="mt-3 row">

                <div class="sg-chosen-card-div col-4">
                    <img src='{{asset("appimg/tarocards/$card_one.png")}}' class="sg-chosen-card" alt="">
                    <div>
                        <p class="body-text">
                            {{$cardNames[$card_one]}}
                        </p>
                    </div>
                </div>
                <div class="sg-chosen-card-div col-4">
                    <img src='{{asset("appimg/tarocards/$card_two.png")}}' class="sg-chosen-card" alt="">
                    <div>
                        <p class="body-text ">
                            {{$cardNames[$card_two]}}
                        </p>
                    </div>
                </div>
                <div class="sg-chosen-card-div col-4">
                    <img src='{{asset("appimg/tarocards/$card_three.png")}}' class="sg-chosen-card" alt="">
                    <div>
                        <p class="body-text " >
                            {{$cardNames[$card_three]}}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        {{-- suggestion text --}}
        <div>
            <p class="body-text" style="white-space: pre-line">
                {{$firstContent}}
            </p>


            {{-- Scroll to product ordering --}}
            <div class="mt-5">
                <div style="width: 85%;background-color:#DDC091;padding:10px;text-align:center;border-radius:5px" class="mx-auto" >
                    <span onclick="scrollToOrder()" style="color: black;text-decoration:none;cursor: pointer;font-weight:700">
                        လာဘ်ရွှင်ငွေဝင်ပြီးကံကောင်းစေတဲ့ နင်္ဂါး ဆွဲပြား အဆောင်လေးကို မှာယူမယ်
                    </span>
                </div>
            </div>

            <div class="mt-3">
                <p class="body-text" style="white-space: pre-line">
                    {{$secondContent}}
                </p>

            </div>

            {{-- example --}}
            <div class="mt-3">
                <div style="padding-top: 5px">
                    <strong class="sg-header-text">ဒီအဆောင်လေးကတကယ်ပဲ ဆောင်ထားရင် အစွမ်းထက်သလား ???</strong>
                </div>

                <div class="mt-3">
                    <p class="body-text">
                        လာဘ်ရွှင်ငွေဝင်ကံကောင်းစေတဲ့ နင်္ဂါး ဆွဲပြား လေးက သော့လေးတချောင်းလိုပါပဲ။
                        မိတ်ဆွေရဲ့ မရရှိသေးတဲ့ မပွင့်သေးတဲ့ တိမ်မြုပ်နေတဲ့ လာဘ်လာဘတံခါးချပ်လေးတွေကို ဖွင့်ပေးနိုင်မှာပါ။
                        ယုံယုံကြည်ကြည်နဲ့သာ ဆောင်ပြီးစောင့်ကြည့်နေလိုက်ပါ။
                        သင့် ထံကို မမျှော်လင့်ထားတဲ့ ကံကောာင်းခြင်းတွေ ၊ အခြေအနေကောင်းတွေ ရောက်လာပါလိမ့်မယ်။ ဥပမာ-
                    </p>
                    <div style="padding: 10px">
                        <p class="body-text">
                            អလက်ရှိအလုပ်ကနေ ဒီ့ထက်ပိုကောင်းတဲ့အလုပ်ကို ပြောင်းရတာမျိုး ၊ ရာထူးတိုးသွားတာမျိုး
                        </p>
                        <p class="body-text">
                            អသင့်ရဲ့ ဘဝလမ်းကြောင်းလွှဲမှားနေရင် တည့်မတ်သွားနိုင်အောင် လှုံ့ဆော်ပေးတာမျိုး
                        </p>
                        <p class="body-text">
                            អငွေကြေးနဲ့ ပတ်သတ်လာရင် ကံကောင်းစေလာနိုင်မယ်
                        </p>
                        <p class="body-text">
                            អကိုယ်ပိုင်လုပ်ငန်းလေး စပြီး လုပ်လာနိုင်မယ်
                        </p>
                        <p class="body-text">
                            អသင့်ဘဝမှာ ငွေတွေ အလုံးလိုက် အရင်းလိုက် ဝင်လာတာမျိုး ကြုံတွေ့လာနိုင်ပါတယ်။
                        </p>
                    </div>
                    <div>
                        <p class="body-text" style="color: rgb(233, 232, 232)">
                            မိတ်ဆွေရဲ့ အဆင်မပြေတာတွေ ငွေကြေးအခက်အခဲတွေကို ကျွန်တော့်ရဲ့ အဆောင်လေးက ကူညီပေးပါလိမ့်မယ်။
                        </p>
                    </div>
                </div>
            </div>

            {{-- product image --}}
            <div class="mt-5" style="text-align: center" id="order-form-div">
                <img src="{{asset($product->image)}}" style="width: 35%;border-radius:5px" alt="product">

            </div>

            {{-- product order form --}}
            <div class="mt-3">
                <div style="padding-top: 5px">
                    <p style="color: #D3B37C;font-size:17px;font-weight:bold">ဒီ ဖောင် (Form)လေးကိုသာ ဖြည့်ပေးလိုက်ပါ။လာဘ်ရွှင်ငွေဝင်ပြီး ကံကောင်းစေတဲ့ အဆောင်လေးကိုရရှိမှာဖြစ်ပါတယ်။
                        သင့် ဘဝမှာ ခုချိန်က စပြီး ကံကောင်းလာပြီး ငွေကြေးအဆင်ပြေလာတော့မှာပါ။ </p>
                </div>
                {{-- price --}}
                <div class="mt-3" >
                    <div style="text-align: center">
                        <del style="font-size: 18px;color:rgb(255, 255, 255);font-weight:500">{{$price->cancelPrice}} ကျပ်</del>
                    </div>
                    <div style="text-align: center">
                        <strong style="font-size: 20px;color:#FFA700"> {{$price->price}} ကျပ်</strong>
                    </div>
                    {{-- form --}}
                    <div class="mt-3" >
                        <div style="text-align:center" class="mx-auto order-form-div">
                            <form action="{{route('user.order')}}" method="POST">
                                @csrf
                                <div class="form-group">

                                    <input type="text" placeholder="အမည်" class="form-control" name="fullname" required>
                                </div>
                                <div class="form-group">

                                    <input type="text" placeholder="ဖုန်း  e.g 09-xxxxxxxxx" class="form-control" name="phonenumber" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn" style="background-color: #D3B37C;width:50%">အော်ဒါ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comments --}}
            <div class="mt-5">
                <div class="container" style="background-color: white">
                    <div style="padding: 5px;background-color:#4267B2">
                        <span style="font-size: 16px;color:white"> Comments </span>
                    </div>
                    <div class="mt-3" style="padding: 5px" >
                        @foreach ($comments as $comment)
                            <div class="row" >
                                <div class="col-3 col-md-2">
                                    <img src="{{asset($comment->image)}}" class="comment-img" alt="Commenter photo profile">
                                </div>
                                <div class="col-9 col-md-10" >
                                    <div> <span style="color: #4267B2;font-size:0.8rem">{{$comment->Name}}</span> </div>
                                    <div> <span style="color: #3a3a3a;font-size:0.8rem">{{$comment->comment}}</span> </div>
                                    <div >
                                        <span style="color: #4b4b4d;font-size:0.6rem">{{$comment->date}}</span>
                                     </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="mt-3" style="text-align: center">
                <div style="background-color:#DDC091;padding:10px;text-align:center;border-radius:5px;display:inline-block;"
                class="mx-auto" >
                    <span onclick="scrollToOrder()" style="color: black;text-decoration:none;cursor: pointer;">
                        အဆောင်လေးကို မှာယူမယ်
                    </span>
                </div>
            </div>

        </div>
        {{-- footer --}}
        <div style="height: 50px"></div>
        <div style="text-align: center">
            <a href="{{route('privacy')}}" target="_blank" style="color: white">Privacy Policy</a>
        </div>

    </div>





    <script>
        setTimeout(() => {
            document.getElementById('loadingContent').style.display='none';
            document.getElementById('sg-main-content').style.display='block';
        }, 5000);
    </script>
@endsection
