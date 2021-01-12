@extends('layout.app')

@section('content')
    <div class="container">

        <div style="padding-top: 3px">
            <img src="{{asset('appimg/Abhigya-620x321.png')}}" class="abhigya-img" alt="Abhigya">
        </div>
        <div class="mt-3">
            <div >
                <p class="body-text">
                    မင်္ဂလာပါခင်မျာ ။ ကျတော်က အိန္ဒိယနိုင်ငံ နယူးဒေလီမြို့က နက္ခ ဗေဒင် နဲ့ ရှေးဖြစ်ဟောတဲ့ ပညာရှင်ဖြစ်ပါတယ်။
                    ကျွန်တော်ဟာဆိုရင်ဖြင့် ရှေ့မှာ ဖြစ်ပေါ်လာမယ့် အရာတွေ နဲ့ လူတွေရဲ့ ရှေ့မှာ ဖြစ်ပေါ်လာမယ့် ကံကြမ္မာ ကို
                    ကြို မြင်ပီးတော့ ဟောကြားပေးခဲ့တာဆိုရင် နှစ်အနည်းငယ်ရှိခဲ့ပါပြီ။ လူကြီးမင်းတို့ သိခဲ့ကြလား မသိဘူး ???
                    ကျွန်တော် ကိုရိုနာ ဗိုင်းရစ် (covid-19) ဖြစ်တော့မယ်ဆိုတာကို ဒီကပ်ဆိုးကြီး မတိုင်ခင် ၆ လ အလိုမှာထဲက
                    ကြိုဟောခဲ့တာ ဖြစ်ပါတယ်။ လူကြီးမင်းတို့ မယုံဘူး စိတ်ဝင်စားတယ် ဆိုရင်ဖြင့် ကျွန်တော့်ရဲ့ You Tube Channel မှာ ဝင်ကြည့်နိုင်ပါတယ်။
                     ကျွန်တော်က အဏုဇီဝဗေဒ နဲ့ ဘွဲ့လွန်ပြီးမြောက်ထားတဲ့လူ ဖြစ်ပြီး နက္ခ ဗေဒင် နဲ့ ပေါင်းစပ် ပြီး ဟောကြားပေးခဲ့တာပါ။
                </p>
                <p class="body-text">
                    လူကြီးမင်းတို့ရဲ့ ဘဝကံကြမ္မာ ကို ခု တားရော့ကဒ် (ကံကြမ္မာ ကဒ်) ကလေးတွေနဲ့ ရှေ့မှာ ဘာတွေဖြစ်လာမလဲ ၊
                    ကံဆိုးခြင်းတွေ ဘယ်လို လာမှာလဲ ၊ အခုကံဆိုးတာတွေ ကံ အညံ့တွေက ဘယ်တော့ ကုန်ဆုံးမှာလဲ ဆိုတာပြောကြားပေးနေပါတယ်။
                    တကယ်လိုအပ်နေတဲ့လူတွေကို ကျွန်တော့ရဲ့ တက်ကျွမ်းတဲ့ပညာနဲ့တဖက်တလမ်းကနေ
                    ငွေမယူပဲ ကျွန်တော့်ကို ဆက်သွယ်လာတဲ့ လူတိုင်းကို ပညာ ဒါနပြုလုပ်ပြီး ဟောကြားပေးနေခဲ့ပါတယ်။
                </p>
                <p class="body-text">
                    မိတ်ဆွေကိုလဲ တက်နိုင်တဲ့ဘက်ကနေ ကူညီပေးပါရစေ !!!
                </p>
                <p class="body-text">
                    ကျွန်တော် တက်ကျွမ်းတဲ့ နက္ခ ဗေဒင် ပညာရပ် ကို အသုံးပြု ပြီး မိတ်ဆွေရဲ့ ရှေ့မှာ ဖြစ်ပေါ်လာမယ့် ကံဆိုးခြင်း ကံကောင်းခြင်းတွေကို
                    တားရော့ကဒ် (ကံကြမ္မာ ကဒ်) တွေအသုံးပြုပြီး ဟောကြားပေးမှာ ဖြစ်ပါတယ်။

                </p>
                <p class="body-text">
                    ကောင်းပြီ ၊ ခု မိတ်ဆွေလုပ်ရမှာက တားရော့ ကဒ်ကလေး ၃ ကဒ်ကို ရွေးပေးရုံပါပဲ။
                </p>
            </div>
        </div>
    </div>

    <div class="card-div-bg">
        <div class="container" >
            <h4 style="color: white;padding:10px" class="mt-5">တားရော့ ကဒ်လေး ၃ ကဒ်ကို ရွေးပေးပါ</h4>
        </div>
        <div class="mt-3">
           <div class="d-flex flex-wrap justify-content-start">
                @for ($i = 1; $i < 21; $i++)

                    <div class="card-div">
                        <img style="width:100%" class="taro-card" id="taro-card-{{$i}}"
                        onclick="chooseCard('{{$i}}',renderCards())"
                        src="{{asset('appimg/cards/rubashka.png')}}" />
                    </div>
                @endfor
           </div>

        </div>
    </div>


    <div class="modal fade" id="form-modal" data-backdrop='false'>
        <div class="modal-dialog modal-dialog-centered" >
            <div class="modal-content" style="background-color: transparent">

                <div>

                        <div style="text-align: center;display:block" id="name-input-div" class="mx-auto">
                            <input type="text" id="name-input" name="name"  placeholder="မိတ်ဆွေရဲ့နာမည်ကို ဖြည့်ပေးပါ"
                             class="name-input" required>
                        </div>

                        <div style="text-align: center" id="gender-input-div" class="mx-auto">
                            <div>
                                <h4 style="color: white;font-size:16px">Gender ကို ရွေးချယ်ပေးပါ ။</h4>
                            </div>
                            <div class="mt-3">
                                <input type="radio" value="male" name="gender" checked>
                                 <span style="color: white;font-size:13px">အမျိုးသား</span>
                            </div>
                            <div>
                                <input type="radio" value="femail" name="gender">
                                <span style="color: white;font-size:13px">အမျိုးသမီး</span>
                            </div>
                        </div>

                    <div style="text-align: center" class="mx-auto mt-3">
                        <button class="btn btn-sm" onclick="next()" id="next-button"
                        style="background-color:#D3B37C;width:200px;font-size:18px">Next</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div style="height: 50px"></div>
    <div style="text-align: center">
        <a href="{{route('privacy')}}" target="_blank" style="color: white">Privacy Policy</a>
    </div>



    <script>
        var i=0;
        let chosenCards=[];
        let rendered_cards=[];
    </script>
@endsection
