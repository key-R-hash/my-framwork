<html>
<head>
    <link rel="stylesheet" type="text/css" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/css.css">
    <link rel="script" href="public/bootstrap/bootstrap.min.js" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="font-family: iransans">

<div class="div-nav ">
            @if(1 == 2)
            <h1>kiarash</h1>
            @endif

    <div class="container">
        <nav class="nav blog-nav float-right pt-2 nav-des">
            <ul>
                <li class="d-inline-block des">
                    <a style="color: darkred ;" class="nav-link my-sm-2" href="#">
                        {{شبکه توزیع محتوا}}
                    </a>
                </li>
                <li class="d-inline-block des">
                    <a  class="nav-link my-sm-2 text-dark" href="#">
                        {{پلتفرم ویدیویی}}
                    </a>
                </li>
                <li class="dropdown d-inline-block aaa des">
                    <a class="nav-link my-sm-2 text-dark " href="#">
                        {{قیمت}}
                    </a>
                    <ul class="dropdown-menu text-right" >
                        <li><a href="#" class="menu text-right">
                                پایگاه دانش
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                بلاگ
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                مقالات
                            </a></li>
                    </ul>
                </li>

                <li class="dropdown d-inline-block aaa des">
                    <a class="nav-link my-sm-2 text-dark" href="#" data-toggle="dropdown">
                        {{راهنما}}
                    </a>
                    <ul class="dropdown-menu text-right">
                        <li><a class="menu text-right">
                                شبکه های توزیع محتوا
                            </a></li>
                        <li><a class="menu text-right">
                                پلتفرم ویدیویی
                            </a></li>

                    </ul>
                </li>
                <li class="dropdown d-inline-block aaa des" >
                    <a class="nav-link my-sm-2 text-dark" href="#" data-toggle="dropdown">
                        {{ورود/ثبت نام}}
                    </a>

                    <ul class="dropdown-menu text-right" >
                        <li><a href="#" class="menu text-right">
                                معماری بر پایه cdn
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                انتخاب هوشمند کیفیت
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                امیت محتوا
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                پخش زنده
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                سایر امکانات
                            </a></li>
                    </ul>
                </li>
                <li class="dropdown d-inline-block aaa des" >
                    <a class="nav-link my-sm-2 text-dark" href="#" data-toggle="dropdown">
                        {{نسل جدبد محصولات}}
                    </a>

                    <ul class="dropdown-menu text-right">
                        <li><a href="#" class="menu text-right">
                                توزیع محتوا
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                امیت ابری
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                افزایش سرعت
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                گزارشات تحلیلی
                            </a></li>
                        <li><a href="#" class="menu text-right">
                                سرویس dns ابری
                            </a></li>

                    </ul>
                </li>

                <li class="d-inline-block">

                    <a class="pr-2 des" style="font-size: 25px ;color: #8e8e8e">|</a>

                    <a href="#" class="br">
                        <img style="font-weight: normal" width="89px" height="54px" src="public/image/logo-fa.svg">
                    </a>
                </li>
                <li style="border-left: 1px solid rgba(142, 142, 142, 0.54);padding-right: 10px;padding-left: 10px" class="d-none bars ml-3" >

                    <a href="#" class="br mobile-menu" >
                        <i style="color: #8e8e8e;font-size: 25px;height: 100%;padding-top: 22px" class="fa fa-bars pl-2 ">

                        </i>
                    </a>

                </li>
            </ul>

        </nav>

        <nav class="nav blog-nav float-left pt-2 nav-connect des">
            <ul>
                <li class="d-inline-block">

                    <button type="button" class="btn my-sm-2 pb-2">
                        {{تحت حمله هستید؟}}

                    </button>
                </li>
                <li class="d-inline-block nav-link">
                    <i class="fas fa-phone d-inline-block"></i>
                    <a class="d-inline-block">
                        ۵۱ ۵۱ ۵۱ ۸۹ - ۰۲۱
                    </a>
                </li>
                <li class="d-inline-block nav-link">
                    <i class="fas fa-globe-americas d-inline-block"></i>
                    <a class=" d-inline-block">
                        {{Fa}}
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div style="display: none;margin-top: 70px;position: absolute" class="nav-mobile w-100 p-0 mb ">
        <ul class="pl-0 w-100">
            <li style="list-style-type: none;border-bottom: 1px solid #f2f2f2;background-color: #8e8e8e" class=" pt-3 pb-3 text-center">
                <a  href="#" style="text-decoration: none" class="text-light">
                    نسل جدید محصولات
                </a>
            </li>
            <li style="list-style-type: none;border-bottom: 1px solid #f2f2f2;background-color: #8e8e8e" class=" pt-3 pb-3 text-center">
                <a href="#" style="text-decoration: none" class="text-light" >
                    ورود/ثبت نام
                </a>
            </li>
            <li style="list-style-type: none;border-bottom: 1px solid #f2f2f2;background-color: #8e8e8e" class=" pt-3 pb-3 text-center">
                <a href="#" style="text-decoration: none" class="text-light" >
                    راهنما
                </a>
            </li>
            <li style="list-style-type: none;border-bottom: 1px solid #f2f2f2;background-color: #8e8e8e" class=" pt-3 pb-3 text-center">
                <a href="#" style="text-decoration: none" class="text-light" >
                    قیمت
                </a>
            </li>
            <li style="list-style-type: none;border-bottom: 1px solid #f2f2f2;background-color: #8e8e8e" class=" pt-3 pb-3 text-center">
                <a href="#" style="text-decoration: none" class="text-light" >
                    پلتفرم ویدیویی
                </a>
            </li>
            <li style="list-style-type: none;border-bottom: 1px solid #f2f2f2;background-color: #8e8e8e" class="pt-3 pb-3 text-center">
                <a href="#" style="text-decoration: none" class="text-light" >
                    شبکه توزیع محتوا
                </a>
            </li>
        </ul>
    </div>
</div>
<header class="align-content-center w-100" >
    <div id="map" class="position-relative hidden-lg-down">
        <img class="w-100" src="public/image/world-maps-fa.svg">

    </div>

    <div class="position-relative" style="z-index: -1;">
        <h3 class="text-center text-light pt-5 ">راهکار‌های مبتنی بر شبکه‌های توزیع محتوا
        </h3>
        <h5 class="text-center text-light pt-4 pb-4 ">
            CDN, DDoS Protection, Video Platform
        </h5>
    </div>
</header>
<div class="container box">
    <div>
        <div class="border d-inline-block m-2 sell d-inline-block"  >
            <img src="public/image/library.png" width="150px" height="150px">
            <div class="pt-4 text-center w-100">
                کتابخانه ابر‌آروان
            </div>
            <p class="text-center pt-4 des">
                کتابخانه ابر آروان شامل بیش از ۳۰ هزار نسخه مختلف از کتابخانه‌های JavaScript، CSS و معروف‌ترین فونت‌های آزاد فارسی است.
            </p>
            <p class="text-center"> <a  href="#">دیدن کتابخانه</a></p>
        </div>
        <div  class="border d-inline-block m-2 sell d-inline-block">
            <img src="public/image/video.png" width="150px" height="150px">
            <div class="pt-4 text-center w-100 ">
                پلتفرم ویدیویی
            </div>
            <p class="text-center pt-4 des">
                پلتفرم ویدیویی ابر آروان به شما اجازه می‌دهد تا ویدیو‌های خود را با تنظیمات مورد نظرتان ویژه‌سازی کنید و در تمام نقاط دنیا منتشر کنید.
            </p>
            <p class="text-center"><a  href="#"  >قیمت/بسته‌های فروش</a></p>
        </div>
        <div class="border d-inline-block m-2 sell d-inline-block" >
            <img src="public/image/ddos.png" width="150px" height="150px">
            <div class="pt-4 text-center w-100 ">
                جلوگیری از حملات DDoS
            </div>
            <p class="text-center pt-4 des">
                ابر آروان از شما در برابر حملات DDoS صورت گرفته بر روی سرویس DNS، حملات لایه شبکه و حملات منع سرویس لایه ۷ محافظت می‌کند.
            </p>
            <p class="text-center"> <a href="#">بیشتر بدانید</a></p>
        </div>

        <div class="border d-inline-block m-2 sell d-inline-block" >
            <img src="public/image/cdn.png" width="150px" height="150px">
            <div class="pt-4 text-center w-100">
                CDN عمومی و اختصاصی
            </div>
            <p class="text-center pt-4 des">

                شبکه توزیع محتوا، سامانه امنیت ابری و شتابدهنده وب «ابر آروان» وبسایت شما را سریعتر و همیشه در دسترس می‌سازد.
            </p>

            <p class="text-center"><a  href="#">قیمت/بسته‌های فروش</a></p>


        </div>
    </div>
</div>
<div class="panel w-100 pt-2">
    <div  class="container mb">


        <div class="panel-demo d-inline-block">
            <h3 class="text-center text-light">دمو - پنل کاربری
            </h3>
            <div style="direction: rtl" class="input-group input-group-sm mb-2 pt-3">
                <div class="input-group-append">
                    <i class="input-group-text fas fa-user" id="inputGroup-sizing-sm"></i>
                </div>
                <input style="direction: ltr;background-color: white;height: 41px;border-radius: 10px 0px 0px 10px" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="demoarvancloud.com" disabled>
            </div>
            <div style="direction: rtl" class="input-group input-group-sm mb-2">
                <div class="input-group-append">
                    <i class="input-group-text fa fa-key" id="inputGroup-sizing-sm"></i>
                </div>
                <input style="background-color: white;height: 41px;border-radius: 10px 0px 0px 10px;direction: ltr" type="password" value="1234" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="demoarvancloud.com" disabled>
            </div>
            <div>
                <button type="button" class="btn btn-sm pb-3 pt-2">وارد شوید</button>
            </div>
            <p style="color: white;text-align: -webkit-center;width: 323px;padding-top: 30px;direction: rtl;">
                برای استفاده از ابر آروان نیاز به هیچگونه تغییری در کدهای سمت سرور، تنظیمات دیتاسنتر و حتی سرورهای میزبانی محتوا ندارید. تنها با چند کلیک وب سایت خود را در ابر آروان ثبت کرده، آن را شتاب‌دهی و در برابر حملات محافظت کنید.
            </p>
        </div>
        <div class="panel-video d-inline-block">
            <video width="629px" src="public/image/arvan-register.mp4" type="video/mp4" autoplay loop></video>
        </div>
    </div>

    <div  class="container des">

        <div class="panel-video d-inline-block">
            <video width="629px" src="public/image/arvan-register.mp4" type="video/mp4" autoplay loop></video>
        </div>
        <div class="panel-demo d-inline-block">
            <h3 class="text-center text-light">دمو - پنل کاربری
            </h3>
            <div style="direction: rtl" class="input-group input-group-sm mb-2 pt-3">
                <div class="input-group-append">
                    <i class="input-group-text fas fa-user" id="inputGroup-sizing-sm"></i>
                </div>
                <input style="direction: ltr;background-color: white;height: 41px;border-radius: 10px 0px 0px 10px" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="demoarvancloud.com" disabled>
            </div>
            <div style="direction: rtl" class="input-group input-group-sm mb-2">
                <div class="input-group-append">
                    <i class="input-group-text fa fa-key" id="inputGroup-sizing-sm"></i>
                </div>
                <input style="background-color: white;height: 41px;border-radius: 10px 0px 0px 10px;direction: ltr" type="password" value="1234" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="demoarvancloud.com" disabled>
            </div>
            <button type="button" class="btn btn-sm pb-3 pt-2">وارد شوید</button>
            <p style="color: white;text-align: -webkit-center;width: 390px;padding-top: 30px">
                برای استفاده از ابر آروان نیاز به هیچگونه تغییری در کدهای سمت سرور، تنظیمات دیتاسنتر و حتی سرورهای میزبانی محتوا ندارید. تنها با چند کلیک وب سایت خود را در ابر آروان ثبت کرده، آن را شتاب‌دهی و در برابر حملات محافظت کنید.
            </p>
        </div>
    </div>
</div>
<div class="cdn">
    <div class="container">
        <div class="text-center">
            <h3 class="pb-3">
                شبکه توزیع محتوا (CDN) ابر آروان
            </h3>
            <p style="color: #383838;font-weight: 300;direction: rtl">
                ابر آروان اولین CDN عمومی، شتابدهنده وب و سامانه امنیت ابری در ایران
            </p>

            <button id="b1" class="btn bt ml-2">
                پلتفرم ویدیویی
            </button>
            <button id="b2" class="btn bt btactive">
                شبکه توزیع محتوا
            </button>
            <div id="a1" class="d-none">
                <div class="row">
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/AnyCast.svg">
                        <p class="explain pt-4">
                            معماری Anycast و GSLB
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/CompressFile.svg">
                        <p  class="explain pt-4">
                            فشرده سازی محتوا
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/cloudDNS.svg">
                        <p class="explain pt-4">
                            DNS ابری
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/CDNFeatures.svg">
                        <p class="explain pt-4">
                            توزیع محتوا در نقاط مهم

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/userAnalytics.svg">
                        <p class="explain pt-4">
                            گزارشات کاربران، سرعت و امنیت
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/DistributionCDN.svg">
                        <p class="explain pt-4">
                            توزیع بار بین سرور‌های مختلف
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/DDoSAttack.svg">
                        <p  class="explain pt-4">
                            جلوگیری از حملات DDoS
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/APICDNFeatures.svg">
                        <p class="explain pt-4">
                            ارائه API
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/supportCDNFeature.svg">
                        <p  class="explain pt-4">
                            پشتیبانی ۲۴ ساعته
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/HSTSCDNFeature.svg">
                        <p class="explain pt-4">
                            پشتیبانی از HSTS و HTTPv2
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/CDNFeatures.svg">
                        <p class="explain pt-4">
                            صدور SSL رایگان

                        </p>
                    </div>
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/FirewallCDNFeature.svg">
                        <p class="explain pt-4">
                            فایروال و دیواره آتش وب
                        </p>
                    </div>
                </div>
            </div>
            <div id="a2" style="display: none" class="active">
                <div class="row">
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/SizeVideo.svg">
                        <p class="explain pt-4">
                            تعیین اندازه تصویر
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/SmartChoice.svg">
                        <p  class="explain pt-4">
                            انتخاب هوشمند کیفیت
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/ResolutionVideo.svg">
                        <p class="explain pt-4">
                            تعیین کیفیت صدا و تصویر
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 mt-5 cl">
                        <img class="btn1" src="public/image/CDNBase.svg">
                        <p class="explain pt-4">
                            معماری بر پایه

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/privateDomainVideo.svg">
                        <p class="explain pt-4">
                            نام دامنه اختصاصی
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/WaterMark.svg">
                        <p class="explain pt-4">
                            امکان افزدون واترمارک
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/Support.svg">
                        <p  class="explain pt-4">
                            سازگاری بالا
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 mb-5 cl">
                        <img class="btn1" src="public/image/protectContentVideo.svg">
                        <p class="explain pt-4">
                            امنیت محتوا
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/adsVideo.svg">
                        <p  class="explain pt-4">
                            نمایش تبلیغات
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/uploadVideo.svg">
                        <p class="explain pt-4">
                            آپلود ساده
                        </p>
                    </div>
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/limitVideo.svg">
                        <p class="explain pt-4">
                            عدم محدودیت

                        </p>
                    </div>
                    <div class="col-sm-6 col-3 cl">
                        <img class="btn1" src="public/image/LiveStream.svg">
                        <p class="explain pt-4">
                            پخش زنده
                        </p>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-light mt-5 mb-5" id="cost"><i class="fas fa-long-arrow-alt-left pr-3"></i>قیمت / مقایسه پلن‌ها </button>
        </div>
    </div>
</div>

<div class="container sell-packet">
    <div class="text-center">
        <h3 class="pb-2">
            بسته‌های فروش شبکه‌ توزیع محتوا ابر آروان
        </h3>
        <button id="bp1" class="btn bt ">
            پلتفرم ویدیویی
        </button>
        <button id="bp2" class="btn bt ml-2 btactive">
            شبکه توزیع محتوا
        </button>
        <div id="ap1" class="active d-none">
            <div class="sell d-inline-block">
                <div style="background-color: #eaeaea;">
                    <br>
                    <p class="title">
                        سازمانی
                    </p>
                    <br>
                    <h1 class="h2 p-3 text-center des" style="font-size: 45px !important;"> تماس بگیرید

                    </h1>
                    <h1 class="h2 p-3 text-center call mb"> تماس بگیرید

                    </h1>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <p class="top des">
                    <br>

                    ترافیک ماهانه نامحدود
                    <br>
                    <br>
                    محاسبه ترافیک به صورت پلکانی
                </p>

                <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1">
                    <br>
                    جلوگیری از حملات DDoS پیشرفته
                    <br>
                    <br>
                    ساختار Load Balance پیشرفته
                    <br>
                    <br>
                    ویژه سازی کلیه خطا‌ها
                    <br>
                    <br>
                    گزارشات پیشرفته
                    <br>
                    <br>
                    پشتیبانی ۲۴ ساعته
                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>
            </div>

            <div class="sell d-inline-block">
                <div style="background-color: #00c8cc;color: white">
                    <br>
                    <p class="title">
                        پیشرفته
                    </p>
                    <br>
                    <h1 class="h2 p-3 text-center"> ۳۴۰,۰۰۰

                    </h1>
                    <p style="font-size: 19px">تومان در ماه
                    </p>
                    <br>
                </div>

                <p class="top des">
                    <br>
                    شامل ۱۵۰۰ گیگابایت ترافیک ماهانه
                    <br>
                    <br>
                    هر گیگابایت ترافیک اضافه ۲۴۹ تومان
                </p>
                <p class="des"  style="border-top: 1px solid #eaeaea;color: #999da1;">
                    <br>
                    جلوگیری از حملات DDoS سطح شبکه و لایه ۷
                    <br>
                    <br>
                    مدیریت دیتاسنتر
                    <br>
                    <br>
                    فایروال و دیواره آتش وب
                    <br>
                    <br>
                    کنترل اتصالات و درخواست‌ها
                    <br>
                    <br>
                    پشتیبانی آنلاین و تلفنی
                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>
            </div>
            <div class="sell d-inline-block">
                <div  style="opacity: 0.5">
                    <div style="background-color: #eaeaea">
                        <br>
                        <p style="font-size: 20px;font-weight: 400">
                            اقتصادی
                        </p>
                        <br>
                        <h1 class="h2 p-3 text-center">۴,۴۰۰</h1>
                        <p style="font-size: 19px">تومان در ماه
                        </p>
                        <br>
                    </div>

                    <p class="top des">
                        <br>
                        شامل ۱۵ گیگابایت ترافیک ماهانه
                        <br>
                        <br>
                        هر گیگابایت ترافیک اضافه ۲۹۹ تومان
                    </p>

                    <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1;">
                        <br>
                        جلوگیری از حملات DDoS سطح شبکه ساده
                        <br>
                        <br>
                        توزیع محتوا
                        <br>
                        <br>
                        فشرده‌سازی و بازنویسی محتوا
                        <br>
                        <br>
                        گزارش‌گیری
                        <br>
                        <br>
                        پشتیبانی آفلاین
                    </p>
                    <br>
                </div>

                <p class="des" style="height:59px;opacity: 1;color: #787878;font-size: 17px;font-weight: 300 ;direction: rtl;margin-left: auto;margin-right: auto;width: 228px">


                    در حال حاضر امکان ثبت پلن اقتصادی وجود ندارد.

                </p>
            </div>
            <div class="sell d-inline-block">
                <div style="background-color: #eaeaea;">
                    <br>
                    <p class="title" style="padding-top: 8px">
                        سرویس DNS
                    </p >
                    <br>
                    <h1 class="h2 p-3 text-center">
                        رایگان
                    </h1>
                    <br>
                    <br class="mb">
                    <br>
                    <br>

                </div>

                <p class="top des">
                    <br>

                    شامل ترافیک نامحدود
                    <br>
                    <br>
                    هر گیگابایت ترافیک اضافه ۰ تومان
                </p>
                <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1;">
                    <br>
                    معماری IP ANYCAST
                    <br>
                    <br>
                    پایداری ۹۹.۹
                    <br>
                    <br>
                    مدیریت ساده رکورد‌ها
                    <br>
                    <br>
                    تعداد درخواست نا محدود
                    <br>
                    <br>
                    پشتیبانی تیکتی
                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>
            </div>
        </div>
        <div id="ap2" class="d-none">
            <div class="sell d-inline-block">
                <div style="background-color: #eaeaea;">
                    <br>
                    <p class="title">
                        سازمانی
                    </p>
                    <br>
                    <h1 class="h2 p-3 text-center des" style="font-size: 45px !important;"> تماس بگیرید

                    </h1>
                    <h1 class="h2 p-3 text-center call mb"> تماس بگیرید

                    </h1>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                <p class="top des">
                    <br>

                    شامل پهنای باند نامحدود
                    <br>
                    <br>
                    شامل فضای ابری نامحدود
                    <br>
                    <br>
                    هر گیگابایت ترافیک ۱۹۹ تومان

                </p>

                <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1">
                    <br>
                    پشتیبانی از تبلیغات
                    <br>
                    <br>
                    نام دامنه اختصاصی
                    <br>
                    <br>
                    پشتیبانی از پروتوکل RTMP و RTSP
                    <br>
                    <br>
                    به همراه کلیه امکانات پیشرفته
                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>
            </div>

            <div class="sell d-inline-block">
                <div style="background-color: #00c8cc;color: white">
                    <br>
                    <p class="title">
                        حرفه‌ای
                    </p>
                    <br>
                    <h1 class="h2 p-3 text-center"> ۱,۹۰۰,۰۰۰

                    </h1>
                    <p style="font-size: 19px">تومان در ماه
                    </p>
                    <br>
                </div>

                <p class="top des">
                    <br>
                    شامل ۹۰۰۰ گیگابایت پهنای باند
                    <br>
                    <br>
                    شامل ۹۰۰ گیگابایت فضای ابری
                    <br>
                    <br>
                    هر گیگابایت ترافیک اضافه ۲۹۹ تومان
                </p>
                <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1;">
                    <br>
                    پخش زنده
                    <br>
                    <br>
                    امنیت محتوا
                    <br>
                    <br>
                    رمزنگاری محتوا
                    <br>
                    <br>
                    به همراه کلیه امکانات اقتصادی
                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>
            </div>
            <div class="sell d-inline-block" style="">
                <div style="background-color: #eaeaea;">
                    <br>
                    <p style="font-size: 20px;font-weight: 400">
                        اقتصادی
                    </p>
                    <br>
                    <h1 class="h2 p-3 text-center">۳۴۹,۰۰۰</h1>
                    <p style="font-size: 19px">تومان در ماه
                    </p>
                    <br>
                </div>

                <p class="des" style="color: #7d7d7d">
                    <br>
                    شامل ۹۰۰ گیگابایت پهنای باند
                    <br>
                    <br>
                    شامل ۹۰ گیگابایت فضای ابری
                    <br>
                    <br>
                    هر گیگابایت ترافیک اضافه ۴۹۹ تومان

                </p>

                <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1;">
                    <br>
                    ارائه API
                    <br>
                    <br>
                    انتخاب هوشمند کیفیت
                    <br>
                    <br>
                    پشتیبانی از فرمت HLS و DASH
                    <br>
                    <br>
                    به همراه کلیه امکانات پایه
                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>

            </div>
            <div class="sell d-inline-block">
                <div style="background-color: #eaeaea">
                    <br>
                    <p style="font-size: 20px;font-weight: 400">
                        پایه
                    </p >
                    <br>
                    <h1 class="h2 p-3 text-center">
                        ۴۹,۰۰۰
                    </h1>
                    <p style="font-size: 19px">تومان در ماه
                    </p>
                    <br>
                </div>

                <p class="des" style="color: #7d7d7d">
                    <br>

                    شامل ۹۰ گیگابایت پهنای باند
                    <br>
                    <br>
                    شامل ۹ گیگابایت فضای ابری
                    <br>
                    <br>
                    هر گیگابایت ترافیک اضافه ۶۹۹ تومان

                </p>
                <p class="des" style="border-top: 1px solid #eaeaea;color: #999da1;">
                    <br>
                    معماری بر پایه CDN
                    <br>
                    <br>
                    تعیین کیفیت صدا و تصویر
                    <br>
                    <br>
                    امکان افزدون واترمارک
                    <br>
                    <br>
                    تنظیمات پیش‌فرض

                </p>
                <br>
                <button class="btn login mb-4 des"> ثبت نام</button>
            </div>
        </div>
    </div>
</div>

</div>
<div class="brand">
    <div class="container">
        <div class="text-center">
            <h3 class="pb-2">
                برند‌های معتبر از ابرآروان استفاده می کنند
            </h3>
            <p>
                <small>
                    <a href="#" class="sm">
                        < مشتریان ابرآروان
                    </a>
                </small>
            </p>
            <div class="row">
                <div class="col-3 col-sm-12 mb-5 mt-5 mb-sm-0 mt-sm-5 cl">
                    <img class="w-50" src="public/image/irib.png">
                </div>
                <div class="col-3 col-sm-12 mb-5 mt-5 mb-sm-0 mt-sm-5 cl">
                    <img class="w-50" src="public/image/bpi.png">
                </div>
                <div class="col-3 col-sm-12 mb-5 mt-5 mb-sm-0 mt-sm-5 cl">
                    <img class="w-50" src="public/image/digikala.png">
                </div>
                <div class="col-3 col-sm-12 mb-5 mt-5 mb-sm-0 mt-sm-5 cl">
                    <img class="w-50" src="public/image/President.png">

                </div>
            </div>
            <div class="row">
                <div class="col-3 col-sm-12 mb-5 cl mt-sm-5">
                    <img class="w-50" src="public/image/90tv.png">

                </div>
                <div class="col-3 col-sm-12 mb-5 cl">
                    <img class="w-50" src="public/image/bamilo.png">

                </div>
                <div class="col-3 col-sm-12 mb-5 cl">
                    <img class="w-50" src="public/image/niroo.png">

                </div>
                <div class="col-3 col-sm-12 mb-5 cl">
                    <img class="w-50" src="public/image/divar.png">

                </div>
            </div>
            <div style="padding-bottom: 70px" class="row">
                <div class="col-3 col-sm-12 cl  mb-sm-5">
                    <img class="w-50" src="public/image/zarinpal.png">

                </div>
                <div class="col-3 col-sm-12 cl mb-sm-5">
                    <img class="w-50" src="public/image/bama.png">

                </div>
                <div class="col-3 col-sm-12 cl mb-sm-5">
                    <img class="w-50" src="public/image/digistyle.png">

                </div>
                <div class="col-3 col-sm-12 cl mb-sm-5">
                    <img class="w-50" src="public/image/raja.png">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="definition">
    <p class="text-right d-inline-block">
        ابر آروان به ما کمک می‌کنه، حملات سنگينی که به سروهامون انجام مي‌شه رو بدون کاهش
        کيفيت و سرعت خنثی کنيم. از ابرآروان به خاطر ارائه سرويس خوب و بی‌نظيرشون در ايران
        ممنون هستيم.
    </p>
    <i class="fa fa-quote-right pl-2"></i>

</div>
<p class="text-right">


            <span class="quote">
                امیری
                <br>
                مدیر عامل زرین پال
            </span>

    <img src="public/image/zarinpal.png">


</p>
<div  style="background-color: #F2F2F2">
    <div class="container">
        <div style="padding-top: 100px" class="text-center">
            <h3>
                آخرین اخبار
            </h3>
            <p class="pb-4 psm">
                <small>
                    <a href="#" class="sm">
                        < مشاهده همه خبر‌ها
                    </a>
                </small>
            </p>
            <div class="row news des">
                <div  class="col-4 ">
                    <div>
                        <p>
                            فرصت کوتاه تا دستیابی به بازار جهانی رایانش ابری
                        </p>
                        <img src="public/image/گردهمایی.jpg">
                    </div>
                </div>
                <div  class="col-4">
                    <div>
                        <p>
                            تماشای آنلاین طولانی‌ترین ماه‌گرفتگی قرن با ابر آروان

                        </p>
                        <img src="public/image/254faab9-abf6-419f-a94e-f67b59730f19.jpg">
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <p>
                            کاربرد HSTS در مقابله با حملاتی مشابه حمله به سایت زرین پال
                        </p>
                        <img src="public/image/زرین-پال.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="hr w-100 mt-0 mb-0" >
<div class="footer">
    <div class="container">
        <div class="text-center">
            <div style="padding-bottom: 75px;direction: rtl" class="row mb">
                <div class="col-sm-6 col-3 ">
                    <a class="atitle d-block  pt-4 pb-4 text-right">
                        کاربران

                    </a>
                    <a class="a d-block text-right"  href="#">
                        صفحه اصلی

                    </a>
                    <a class="a d-block text-right"  href="#">
                        صفحه اصلی پنل

                    </a>
                    <a class="a d-block text-right"  href="#">
                        ورود به پنل

                    </a>
                    <a class="a d-block text-right"  href="#">
                        ثبت نام در سایت

                    </a>
                    <a class="a d-block text-right" href="#">
                        قوانین و محرمانگی

                    </a>
                    <a class="a d-block text-right" href="#">
                        سطح کیفیت خدمات

                    </a>

                </div>

                <div class="col-sm-6 col-3">
                    <a class="atitle d-block pt-4 pb-4 text-right">
                        ابر آروان

                    </a>
                    <a class="a d-block text-right"  href="#">
                        درباره ابر آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        تیم ابر آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        ارتباط با ما
                    </a>
                    <a class="a d-block text-right"  href="#">
                        کیت رسانه‌ای
                    </a>
                    <a class="a d-block text-right"  href="#">
                        همکاران تجاری
                    </a>
                    <a class="a d-block text-right"  href="#">
                        فرصت‌های شغلی
                    </a>

                </div>
                <div class="col-sm-6 col-3 pb-4">
                    <a class="atitle d-block pb-4 pt-4 text-right">
                        آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        پایگاه دانش (راهنما)
                    </a>
                    <a class="a d-block text-right"  href="#">
                        مقالات
                    </a>
                    <a class="a d-block text-right"  href="#">
                        وبلاگ
                    </a>
                </div>
                <div class="r float-right">
                    <div style="padding-right: 25px;padding-top: 45px"  class="row i">
                        <div class="col-1 li">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-4 li">
                            شماره تماس
                            <br>
                            پیام کوتاه
                        </div>
                        <div style="text-align: left" class="col-6 li">
                            ۰۲۱ - ۸۹ ۵۱ ۵۱ ۵۱
                            <br>
                            ۳۰۰۰۲۶۷۰۹۰
                        </div>
                    </div>
                    <div style="direction: rtl;padding-right: 25px"  class="row i pt-4">
                        <div class="col-1 li">
                            <i class="fa fa-envelope"></i>

                        </div>
                        <div style="padding-right: 31px" class="col-3 li">
                            پشتیبانی

                        </div>

                        <div style="text-align: left;padding-right: 32px" class="col-6 li">
                            support@arvancloud.com

                        </div>
                    </div>
                    <div style="direction: rtl;padding-right: 25px"  class="row i pt-4 ">
                        <div class="col-1 li ">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="col-4 li">
                            کانال تلگرام

                        </div>
                        <div style="text-align: left" class="col-6 li">
                            @ArvanCloud

                        </div>
                    </div>
                    <div style="padding-right: 12px;padding-left: 17px;" class="row i pt-4">

                        <div class="col">
                            <a href="https://www.linkedin.com/company/arvancloud">
                                <i style="color: #00a0dc" class="fab fa-linkedin-in">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/arvancloud/">
                                <i style="color: #df3469" class="fab fa-instagram">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://plus.google.com/108457408321211661289/posts">
                                <i  style="color: #dc4e41" class="fab fa-google-plus-g">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.facebook.com/arvancloud">
                                <i style="color: #55acee " class="fab fa-facebook-square">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/arvancloud">
                                <i style="color: #55acee;padding-right: 10px" class="fab fa-twitter"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div style="padding-bottom: 75px" class="row des">
                <div class="r float-right des">
                    <div style="direction: rtl;padding-right: 25px;padding-top: 45px"  class="row i">
                        <div class="col-1 li">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-4 li">
                            شماره تماس
                            <br>
                            پیام کوتاه
                        </div>
                        <div style="text-align: left" class="col-6 li">
                            ۰۲۱ - ۸۹ ۵۱ ۵۱ ۵۱
                            <br>
                            ۳۰۰۰۲۶۷۰۹۰
                        </div>
                    </div>
                    <div style="direction: rtl;padding-right: 25px"  class="row i pt-4">
                        <div class="col-1 li">
                            <i class="fa fa-envelope"></i>

                        </div>
                        <div style="padding-right: 31px" class="col-3 li">
                            پشتیبانی

                        </div>

                        <div style="text-align: left;padding-right: 32px" class="col-6 li">
                            support@arvancloud.com

                        </div>
                    </div>
                    <div style="direction: rtl;padding-right: 25px"  class="row i pt-4 ">
                        <div class="col-1 li ">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="col-4 li">
                            کانال تلگرام

                        </div>
                        <div style="text-align: left" class="col-6 li">
                            @ArvanCloud

                        </div>
                    </div>
                    <div style="padding-right: 12px;padding-left: 17px;" class="row i pt-4">

                        <div class="col">
                            <a href="https://www.linkedin.com/company/arvancloud">
                                <i style="color: #00a0dc" class="fab fa-linkedin-in">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/arvancloud/">
                                <i style="color: #df3469" class="fab fa-instagram">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://plus.google.com/108457408321211661289/posts">
                                <i  style="color: #dc4e41" class="fab fa-google-plus-g">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.facebook.com/arvancloud">
                                <i style="color: #55acee " class="fab fa-facebook-square">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/arvancloud">
                                <i style="color: #55acee;padding-right: 10px" class="fab fa-twitter"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-3">
                    <a class="atitle d-block  pt-4 text-right">
                        آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        پایگاه دانش (راهنما)
                    </a>
                    <a class="a d-block text-right"  href="#">
                        مقالات
                    </a>
                    <a class="a d-block text-right"  href="#">
                        وبلاگ
                    </a>
                </div>
                <div class="col-sm-6 col-3">
                    <a class="atitle d-block pt-4 pb-4 text-right">
                        ابر آروان

                    </a>
                    <a class="a d-block text-right"  href="#">
                        درباره ابر آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        تیم ابر آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        ارتباط با ما
                    </a>
                    <a class="a d-block text-right"  href="#">
                        کیت رسانه‌ای
                    </a>
                    <a class="a d-block text-right"  href="#">
                        همکاران تجاری
                    </a>
                    <a class="a d-block text-right"  href="#">
                        فرصت‌های شغلی
                    </a>

                </div>
                <div class="col-sm-6 col-3 ">
                    <a class="atitle d-block  pt-4 pb-4 text-right">
                        کاربران

                    </a>
                    <a class="a d-block text-right"  href="#">
                        صفحه اصلی

                    </a>
                    <a class="a d-block text-right"  href="#">
                        صفحه اصلی پنل

                    </a>
                    <a class="a d-block text-right"  href="#">
                        ورود به پنل

                    </a>
                    <a class="a d-block text-right"  href="#">
                        ثبت نام در سایت

                    </a>
                    <a class="a d-block text-right" href="#">
                        قوانین و محرمانگی

                    </a>
                    <a class="a d-block text-right" href="#">
                        سطح کیفیت خدمات

                    </a>

                </div>
                <div class="r float-right mb">
                    <div style="padding-right: 25px;padding-top: 45px"  class="row i">
                        <div class="col-1 li">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="col-4 li">
                            شماره تماس
                            <br>
                            پیام کوتاه
                        </div>
                        <div style="text-align: left" class="col-6 li">
                            ۰۲۱ - ۸۹ ۵۱ ۵۱ ۵۱
                            <br>
                            ۳۰۰۰۲۶۷۰۹۰
                        </div>
                    </div>
                    <div style="direction: rtl;padding-right: 25px"  class="row i pt-4">
                        <div class="col-1 li">
                            <i class="fa fa-envelope"></i>

                        </div>
                        <div style="padding-right: 31px" class="col-3 li">
                            پشتیبانی

                        </div>

                        <div style="text-align: left;padding-right: 32px" class="col-6 li">
                            support@arvancloud.com

                        </div>
                    </div>
                    <div style="direction: rtl;padding-right: 25px"  class="row i pt-4 ">
                        <div class="col-1 li ">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="col-4 li">
                            کانال تلگرام

                        </div>
                        <div style="text-align: left" class="col-6 li">
                            @ArvanCloud

                        </div>
                    </div>
                    <div style="padding-right: 12px;padding-left: 17px;" class="row i pt-4">

                        <div class="col">
                            <a href="https://www.linkedin.com/company/arvancloud">
                                <i style="color: #00a0dc" class="fab fa-linkedin-in">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/arvancloud/">
                                <i style="color: #df3469" class="fab fa-instagram">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://plus.google.com/108457408321211661289/posts">
                                <i  style="color: #dc4e41" class="fab fa-google-plus-g">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.facebook.com/arvancloud">
                                <i style="color: #55acee " class="fab fa-facebook-square">

                                </i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/arvancloud">
                                <i style="color: #55acee;padding-right: 10px" class="fab fa-twitter"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-3">
                    <a class="atitle d-block  pt-4 pb-4 text-right">
                        کتابخانه ابر آروان
                    </a>
                    <a class="a d-block text-right"  href="#">
                        محبوب ترین کتابخانه‌ها
                    </a>
                    <a class="a d-block text-right"  href="#">
                        تمامی کتابخانه ها
                    </a>
                    <a class="a d-block text-right"  href="#">
                        کتابخانه های JavaScript
                    </a>
                    <a class="a d-block text-right"  href="#">
                        کتابخانه های CSS
                    </a>
                </div>


                <div class="col-sm-6 col-3">
                    <a class="atitle d-block  pt-4 pb-4 text-right">
                        پلتفرم ویدئویی

                    </a>
                    <a class="a d-block text-right"  href="#">
                        معماری بر پایه CDN
                    </a>
                    <a class="a d-block text-right"  href="#">
                        انتخاب هوشمند کیفیت
                    </a>
                    <a class="a d-block text-right"  href="#">
                        امنیت محتوا
                    </a>
                    <a class="a d-block text-right"  href="#">
                        پخش زنده

                    </a>
                    <a class="a d-block text-right"  href="#">
                        سایر امکانات
                    </a>
                    <a class="a d-block text-right"  href="#">
                        بسته‌های فروش
                    </a>

                </div>
                <div class="col-sm-6 col-3">
                    <a href="#" class="atitle d-block  pt-4 pb-4 text-right">
                        راهکار سازمانی

                    </a>
                    <a href="#" class="a d-block text-right">
                        CDN خصوصی

                    </a>
                    <a href="#" class="a d-block text-right">
                        راهکار توزیع محتوا سازمانی
                    </a>
                    <a class="a d-block text-right" href="#">
                        راهکار‌های IPTV
                    </a>
                </div>

                <div class="col-sm-6 col-3">
                    <a class="atitle d-block  pt-4 pb-4 text-right">
                        CDN عمومی
                    </a>
                    <a class="a d-block text-right"  href="#">
                        توزیع محتوا
                    </a>
                    <a class="a d-block text-right"  href="#">
                        امنیت ابری
                    </a>
                    <a class="a d-block text-right"  href="#">
                        افزایش سرعت
                    </a>
                    <a class="a d-block text-right"  href="#">
                        گزارشات تحلیلی
                    </a>
                    <a class="a d-block text-right" href="#">
                        سرویس DNS ابری
                    </a>
                    <a class="a d-block text-right" href="#">
                        بسته‌های فروش
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var active1 = $("#a1");
        var active2 = $("#a2");
        var b1 = $("#b1");
        var b2 = $("#b2");

        $("#b1").on("click",function k() {
            active1.removeClass("active");
            active2.removeClass("active");
            b1.removeClass("btactive");
            b2.removeClass("btactive");
            b1.addClass("btactive");
            active2.addClass("active");
        });
        $("#b2").on("click",function k() {
            active1.removeClass("active")
            active2.removeClass("active")
            b1.removeClass("btactive");
            b2.removeClass("btactive");
            b2.addClass("btactive");
            active1.addClass("active")
        });



        var activep1 = $("#ap1");
        var activep2 = $("#ap2");
        var bp1 = $("#bp1");
        var bp2 = $("#bp2");

        $("#bp1").on("click",function k() {
            activep1.removeClass("active");
            activep2.removeClass("active");
            bp1.removeClass("btactive");
            bp2.removeClass("btactive");
            bp1.addClass("btactive");
            activep2.addClass("active");
        });
        $("#bp2").on("click",function k() {
            activep1.removeClass("active")
            activep2.removeClass("active")
            bp1.removeClass("btactive");
            bp2.removeClass("btactive");
            bp2.addClass("btactive");
            activep1.addClass("active")
        });
        zIndex  = 100;
        $(".aaa").hover(function () {
            zIndex ++;
            $(this).find("ul").show()
            $(this).find("ul").css("z-index",zIndex)
            $(this).find("ul").animate({top: '50px',opacity: "1"},300);
            console.log(1);

        })
        $(".aaa").mouseleave(function () {
            console.log(2)
            $(this).find('ul').animate({top: '70px',opacity: "0"},300,function () {
                $(this).hide()
            });
        })

        $(".mobile-menu").click(function () {
            var nav =$(".nav-mobile").hasClass("navbar");

            if(nav == false){
                $(".nav-mobile").show();
                $(".nav-mobile").addClass("navbar")

            }else {
                $(".nav-mobile").removeClass("navbar")
                setTimeout(function () {
                    $(".nav-mobile").hide()
                }, 500)

            }
        });

    });
</script>
</body>
</html>
@if(1 == 2)
<h1>kiarash</h1>
@endif
@if(1 == 3)
echo 'kiarash';
@endif
