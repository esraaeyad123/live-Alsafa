<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang= ar dir= rtl>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
    <link href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website') }}/style.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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

                    نوفر لكم أفضل المطاعم وأفضل الخصومات
                    نعمل جاهدين وبذكاء على ايصالكم لأفضل المطاعم والخدمات المناسبة على رغباتكم والحصول على خصومات قوية

                </p>
            </div>
            <div class="part two">
                <div class="image">
<img src="/offer/offer.jpg">
                </div>


            </div>
        </div>
    </div>
</div>
     <div class="contact  pd-y">

         <div class="section-header">
             <h2 class="section-title">Get In Touch</h2>
             <span class="line"></span>
         </div>


         <div class="contact-inf">
             <li>     <i class=" icon fa fa-phone fa-2x"></i>
                 <p class="contact-icon-phone">phone</p>
                 <p class="contact-date">512-421-3940</p> </li>
             <li>      <i class="icon fa fa-map-marker fa-2x"></i>
                 <p class="contact-icon-phone">address</p>
                 <p class="contact-date">1739 Bubby Drive</p> </li>

             <li>      <i class=" icon fa fa-envelope fa-2x"></i>
                 <p class="contact-icon-phone">email</p>
                 <p class="contact-date">email@support.com</p></li>
         </div>

         <form action="{{ route('website.contact') }}" method="post">
             @csrf
             @include('includes.errors')
             @if(Session::has('send_message'))
                 <div class="alert alert-success">{{Session::get('send_message')}}</div>
             @endif
             <input type="text" type="name" id="name" name="name" placeholder="namee" class="name">

             <input type="text" type="subject" id="subject" name="subject" placeholder="subjectt" class="name">
             <input type="text" type="phone" id="phone" name="phone"  placeholder="phone" class="phone">

             <select name="category_id" id="category_id" class="select">
                 <option value="" style="display: none" selected>Select Category</option>
                 @foreach($categories as $c)
                     <option value="{{ $c->id }}"> {{ $c->name }} </option>
                 @endforeach
             </select>

             <textarea name="message" id="message" cols="30" rows="7" class="message" placeholder="add you comment" ></textarea>
             <button class="btn">send message</button>
         </form>




     </div> <!--./ section-header -->
     <div class="site-section bg-light">
         <div class="container">
             <div class="row">
                 <div class="col-md-7 mb-5">
                     <form action="{{ route('website.contact') }}" method="post" class="p-5 bg-white">
                         @csrf
                         @include('includes.errors')
                         @if(Session::has('send_message'))
                             <div class="alert alert-success">{{Session::get('send_message')}}</div>
                         @endif
                         <div class="row form-group">
                             <div class="col-md-12">
                                 <label class="text-black" for="fname">Name</label>
                                 <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <label class="text-black" for="email">Email</label>
                                 <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <label class="text-black" for="subject">Subject</label>
                                 <input type="subject" id="subject" name="subject" class="form-control" placeholder="Subject">
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <label class="text-black" for="message">Message</label>
                                 <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                             </div>
                         </div>

                         <div class="row form-group">
                             <div class="col-md-12">
                                 <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                             </div>
                         </div>


                     </form>
                 </div>
                 <div class="col-md-5">
                     <div class="p-4 mb-3 bg-white">
                         <p class="mb-0 font-weight-bold">Address</p>
                         <p class="mb-4">{{ $setting->address }}</p>

                         <p class="mb-0 font-weight-bold">Phone</p>
                         <p class="mb-4"><a href="#">{{ $setting->phone }}</a></p>

                         <p class="mb-0 font-weight-bold">Email Address</p>
                         <p class="mb-0"><a href="#">{{ $setting->email }}</a></p>

                     </div>


                 </div>
             </div>
         </div>
     </div>

<footer>
    <div class="container">
        <div class="footer-content">

            <h2 class="footer-title">سناب لايف الصفا
            </h2>

                      <div class="footer-links">


                <li> <a class="whatsapp" href="https://api.whatsapp.com/send?phone=966500696719"><i class="fab fa-whatsapp" ></i></a></li>
                <li><a class="instagram" href="https://www.instagram.com/livealsafa/"><i class="fab fa-instagram"></i></a></li>
                <li><a class="snapchat" href="https://www.snapchat.com/add/live_alsafa"  ><i class="fab fa-snapchat"></i>

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
