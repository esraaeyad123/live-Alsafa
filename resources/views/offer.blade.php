
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang= ar dir= rtl>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website') }}/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <title>سناب لايف الصفا</title>


</head>
<body>
     <div class="header">
    <div class="container">
        <div class="header-content">

            <div class="logo">
                <h2 class="footer-title">سناب لايف الصفا</h2>

            </div>

        </div>

    </div>
</div>

<div class="home">
    <div  class="overlay">


        <div class="home-content">
            <p class="home-desc">

           حساب متخصص في تغطية كل ما يهم سكان ومرتادي حي الصفا

                نقوم بتغطية
                المطاعم , الكافيهات ,الخصومات , المناسبات , الخدمات , و أي جديد


            </p>
            <a href="https://www.snapchat.com/add/live_alsafa">     <button class="btn-snap">snapchat</button> </a>


        </div>
    </div>
</div>

<div class="about  pd" id="about">
    <div class="about-content">

        <div class="container">
            <div class="part_one">
                <div class="big-title-left">
                    <h2 class="title">من نحن</h2>
                    <span class="ligne"> </span>
                </div>
                <p class="paragraph">

                    {{ $setting->description }}
                </p>
            </div>
            <div class="part two">
                <div class="image">
<img src="{{ asset('website/offer.jpg') }}">
                </div>


            </div>
        </div>
    </div>
</div>


     <div class="site-section bg-light">
         <div class="container">
            <div class="row">
                 <div class="col-md-12 mb-5">
                     <form action="{{ route('website.contact') }}" method="post" class="p-5 bg-white">
                         @csrf
                         @include('includes.errors')
                         @if(Session::has('send_message'))
                             <div class="alert alert-success">{{Session::get('send_message')}}</div>
                         @endif
                         <div class="col-md-12 col-lg-10">
                             <div class="post-entry text-center">
                                 <h2 class="title">اقتراحات</h2>
                                 <span class="ligne"> </span>
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <input type="text" id="name" name="name" class="form-control" placeholder="الاسم">
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <input type="text" id="phone" name="phone" class="form-control" placeholder="رقم جوال">
                             </div>
                         </div>

                         <div class="form-group">
                             <select name="category_id" id="category_id" class="form-control">
                                 <option value="" style="display: none" selected>Select Category</option>
                                 @foreach($categories as $c)
                                     <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                 @endforeach
                             </select>
                         </div>




                         <div class="row form-group">
                             <div class="col-md-12">
                                 <input type="phone" id="phone" name="phone" class="form-control" placeholder="رقم جوال">
                             </div>
                         </div>
                         <div class="row form-group">
                             <div class="col-md-12">
                                 <input type="text" id="subject" name="subject" class="form-control" placeholder="الموضوع">
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="اكتب هنا رسالتك"></textarea>
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <input type="submit" value="ارسال" class="btn btn-primary py-2 px-4 text-white">
                             </div>
                         </div>


                     </form>
                 </div>
             </div>
         </div>
     </div>

   <footer>
    <div class="container">
        <div class="footer-content">

            <h2 class="footer-title">{{ $setting->name }}
            </h2>

                      <div class="footer-links">


                <li>@if($setting->instagram) <a class="whatsapp" target="_blank" href="{{ $setting->whatsapp }}"><i class="fab fa-whatsapp" ></i></a> @endif</li>
          <li>   @if($setting->instagram)<a  class="instagram" target="_blank" href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a> @endif</li>
                <li>@if($setting->instagram)<a class="snapchat" target="_blank" href="{{ $setting->snapchat }}"  ><i class="fab fa-snapchat"> @endif</i>

                   </a></li>

            </div>


            <div class="copyright">
                <span class="credit">Created By  | </span>
               
               
                <span class="far fa-copyright"></span> 2020 All rights reserved.
            </div>
            
        </div>
    </div>
</footer>

























<script>
    let counter =document.querySelector('h1');
    let count =1 ;
    setInterval(()=>{
           counter.innerText=count;

    },1000)
</script>
</body>
</html>
