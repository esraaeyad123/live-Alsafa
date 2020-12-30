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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>عيــــن جــــدة
    </title>


</head>
<body>
<header class="header-fixed">

    <div class="header-limiter">

        <h1><a href="#">عيـــن<span> جــــدة </span></a></h1>



    </div>

</header>








<div class="about  pd" id="about">
    <div class="about-content">

        <div class="container2">
            <div class="part_one">
            

                <a href="https://www.snapchat.com/add/live_alsafa">     <button class="btn-snap">snapchat</button> </a>
                <div class="big-title-left">
                    <h1 class="title"> اضافة السريعة للسناب شات</h1>
                </div>
 
                <div class="big-title-left">
                    <h1 class="title"> عيـــــن جـــدة</h1>
                </div>
                <p class="paragraph">
                
                    رؤينتنا لكم أقرب
                    
                    عينكم  علــى الصالونات النجميلية والمراكز التجارية
                    وأماكن الترفية والنعليم
                    
                    وشاليهات درةالعروس واسنراحاتها
                   
                     كونوا معنا قريبين نريكم الاحداث فور وقوعها
                </p>
                                    <h1 class="title">  جـــدة مباشر 24 ساعة </h1> 

                 <p class="paragraph">
                
                    أربعةوعشرون ساعة مع الخبر
                    
                    مع الخبر وقبله أحيانا
                     ****اخباروافكار*****معلومات ومشاركات****
                    
                    
                   
                    
                </p>
                

            </div>
            <div class="part two">
                <div class="image">
                    <!--<img src="/offer/offer.jpg">-->
                </div>


            </div>
        </div>
    </div>
</div>






<div class="features">
    <div class="container">

        <div class="section-header">
            <h1 class="section-title">مميزات</h2>
                <span class="ligne"></span>
        </div>
    </div>
    <div class="container">
        <div class="features-content">

            <div class="features-item ">

                <i class="icon fa fa-commenting" aria-hidden="true"></i>
                <h3 class="features-item-title">سهولة التواصل</h3>
            </div>

            <div class="features-item ">
                <i class="icon fa fa-check-circle" aria-hidden="true"></i>
                <h3 class="features-item-title ">خدماتنا أساسها مبني على الثقة والأمانة</h3>
            </div>
            <div class="features-item ">
                <i class="icon fa fa-thumbs-o-up"></i>
                <h3 class="features-item-title">الجودة الممتازة ورضى كل عميل هو دائما أولويتنا</h3>
            </div>
        </div>
    </div>
</div>


<div class="offer">
    <div class="container">

        <div class="section-header">
            <h1 class="section-title">خدماتنا</h2>
                <p class="about-item-de">نقوم بتغطيات و تقديم عروض و خصومات لكل المتابعين
                </p>

                <span class="ligne"></span>

        </div>
    </div>
    <div class="container">
        <div class="offer-content">
            <div class="offer-item ltr-effect">
                <i class="icon   fa fa-coffee" ></i>
                <h3 class="offer-item-title">كافيهات </h3>
            </div>
            <div class="offer-item ">
                <i class="icon  fa fa-cutlery"></i>
                <h3 class="offer-item-title">المطاعم</h3>
            </div>

            <div class="offer-item">

                <i class="icon  fa fa-umbrella" ></i>
                <h3 class="offer-item-title">الاستراحات و شاليهات</h3>
            </div>
            <div class="offer-item">
                <i class="icon  fa fa-shopping-cart"></i>

                <h3 class=" offer-item-title">الاسواق</h3>
            </div>


            <div class="offer-item">
                <i class="icon  fa fa-scissors"></i>
                <h3 class="offer-item-title">صالونات و مراكز التجميل</h3>
            </div>

            <div class="offer-item">
                <i class="icon fa fa-server" aria-hidden="true"></i>

                <h3 class="offer-item-title">خدمات اخرى </h3>
            </div>

        </div>
    </div>
</div>











<div class="site-section bg-light">
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
                        <p class="about-item-de">متابعينا الكرام نستقبل اقتراحاتكم لاماكن المفضلة التي تحبونها
                        </p>
                        <span class="ligne"> </span>
                    </div>
                </div>



                <div class="form-group">


                    <h4></h4>
                    <select class="browser-default custom-select" name="category_id" id="category" class="form-control">
                        <option selected>Select category</option>
                        @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>

                    <h4></h4>
                    <select class="browser-default custom-select" name="subcategories_id" id="subcategory" class="form-control">

                    </select>
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





<footer class="footer-distributed">
    <div class="footer-content">

        <div class="footer-left">

            <h3>خصومات و<span>عروض</span></h3>

            <p class="footer-links">
                <a href="#">من نحن</a>
                -
                <a href="#">مميزاتنا</a>
                -
                <a href="#">خدماتنا</a>

            </p>

            <p class="footer-company-name">عروض و خصومات &copy; 2020</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span></span> jeddah, KSA</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+966500696719</p>
            </div>



        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>من نحن</span>
                حساب معك في كل وقت وحين

                نقوم بتغطية
                المطاعم , الكافيهات ,الخصومات , المناسبات , الخدمات , و أي جديد


            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>
    </div>
</footer>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('#category').on('change',function(e) {
            var cat_id = e.target.value;
            $.ajax({
                url:"{{ route('subCat') }}",
                type:"GET",
                data: {
                    cat_id: cat_id
                },
                success:function (data) {
                    // console.log(data.subcategories[0])
                    $('#subcategory').empty();
                    $.each(data.subcategories,function(index,subcat){
                        // console.log(subcat)
                        $('#subcategory').append('<option value="'+subcat.id+'">'+subcat.name+'</option>');
                    })
                }
            })
        });
    });
</script>

<script>
    let counter =document.querySelector('h6');
    let count =1 ;
    setInterval(()=>{
        counter.innerText=count;
    },1000)
</script>
</body>
</html>
