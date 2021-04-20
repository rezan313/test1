<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('/css/css1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="import" href="multi.html">
    <link href="{{ asset('/css/css2.css') }}" rel="stylesheet">
</head>

<body>
    <div>

        <div style="height: 10px;"></div>
        <header id="header">
            <div class="btn-toolbar justify-content-between "   role="toolbar" aria-label="Toolbar with button groups" >
                <div class="btn-group" role="group" aria-label="First group">
                    <a   href="#" class=" btnUp center" id="btnGroupAddon4" style="width: 70px;"></a>
                    <a href="#">
                        <button  type="text" class="input-group-text bg-white btnUp" id="btnGroupAddon3" style="width:220px;">ورود به حساب کاربری</button>
                    </a>
                </div>
                <div class="input-group">
                    <input type="text" class="input-group-text  bg-gray" placeholder="search" aria-label="search" aria-describedby="btnGroupAddon2" style="width:650px;border-top-left-radius: 20px;border-bottom-left-radius:20px ;">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-gray" id="btnGroupAddon1"></div>
                    </div>
                    <a href="#">
                        <button type="text"  id="textDigikal" >digikala</button>
                    </a>
                </div>
            </div>
            <div style="height:10px;"></div>
            <div class="btn-toolbar justify-content-between "  role="toolbar" aria-label="Toolbar with button groups" id="scrollMenu'">
                <div class="btn-group" role="group" aria-label="First group">
                    <button type="button" class="btn " id="gpsIcon"></button>
                    <a href="#">
                        <button type="button" class="btn btn-White" style="font-size: 16px;color: black;">لطفا شهر و استان خود را انتخاب کنید</button>
                    </a>                    
                </div>
                <div class="input-group">
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem " >فروشنده شوید؟</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem " >سوالی دارید</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem" >دیجی پی</button>
                    </a>
                    <a href="#" class="taskItem"> 
                        <button type="button" class="btn btn-White taskItem" >دیجی پلاس</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem" >ديجی کالا من</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem" >دیجی کلاب</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem" >تخفیف و پیشنهادها</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem" >سوپرمارکت</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-White taskItem" >دسته بندی کالاها</button>
                    </a>
                    
                    
                </div>
            </div>
        </header>
        <div> 
            <div  class="firstRow d-flex ">
                <div id="firstRowLeft" class="firstRow" style="width: 500px;">
                    <a href="#">
                        <div class="firstRowLeft"  id="firstLeft"></div>
                    </a>
                    <a href="#">
                        <div class="firstRowLeft" id="firstRight"></div>
                    </a>
                </div>
                <div  class="firstRow " style="width: 900px;">
                    <div class="slideshow-container " >
                        <div class="mySlides fade " >
                            <a href="#">
                                <img src="https://www.w3schools.com/howto/img_snow_wide.jpg" class="HW1">
                            </div>
                        </a>
                        <a href="#">
                            <div class="mySlides fade">
                                <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" class="HW1">
                            </div>
                        </a>
                        <a href="#">
                            <div class="mySlides fade">
                                <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" class="HW1">
                            </div>
                        </a>
                        <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                            <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    </div>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
            </div>
        </div> 
        <div id="slideShowTwo" class="d-flex"> 
            <div  id="slideShow" >
            </div>
            <div id="rightSlide">
                <img src="https://www.digikala.com/static/files/b6c724a0.png" id="rightSlide" alt="">
                <button type="button"  class="btn  btn-info " style="float: right;margin-right: 50px;" >مشاهده همه</button>
            </div>
        </div>
        <div id="slideShow2" class="d-flex" >
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/c5dc4f7207e1c1e182df6ba3e2cc7cb35bae70d0_1618395423.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/84d7ea58e7bd00dacf34177145833f4310d63b6d_1618313447.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/c5dc4f7207e1c1e182df6ba3e2cc7cb35bae70d0_1618395423.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9438eecf3c585e7f2e2fa2e08c8aae7f58c05dc2_1617823661.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
        </div>
        <div id="slideShowTwo" class="d-flex" style="background-color: green;"> 
            <div  id="slideShow" >
            </div>
            <div id="rightSlide">
                <img src="https://www.digikala.com/static/files/93723234.png" id="rightSlide" alt="">
                <button type="button"  class="btn  btn-info " style="float: right;margin-right: 50px;" >مشاهده همه</button>
            </div>
        </div>
        <div id="slideShow2" class="d-flex">
            <div class="twoPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/8efcf8d1dd4eb498a5b5ff4a6bfac3041fd30cce_1602932546.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="twoPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9c23427e8ef4abba64e119f686e81044be9b00d7_1618405708.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">گوشی موبایل</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">هدفون و هدست و  هندزفری</hr3>
            <br><hr>
        </div>
        <div id="slideShow2" class="d-flex" >
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/4733b740d15e74f00d50ac92fb126911632b8053_1599385682.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/956cd52f1f18f11284016c86561d53bcdcfdeedd_1612606849.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/bc928cad36c9cc9aed866ec4de30dfd9f5e50ec7_1607016116.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="fourPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/76998daf25428efd1a62130b631abfe65b2ceea8_1612288934.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">کیف و کاور گوشی</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">کتاب چاپی</hr3>
            <br><hr>
        </div>
        </div>
        <div id="slideShow2" class="d-flex">
            <div class="twoPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/3dd8445614df1d3cf0281bfa81bd5917270f3491_1618387260.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
            <div class="twoPeace"><a href="#"><img class="radius" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/49dc66dd865f422dabba5cc78e4d63baaf14ca83_1618306578.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">محافظ صحفه نمایش گوشی</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">لب تاب و الکترابوک</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">محصولات پر بادید اخیر</hr3>
            <br><hr>
        </div>
        <div id="slideShow2" style="height: 200px;">
            <div class="onePeace"><a href="#"><img class="radius"  src="https://dkstatics-public.digikala.com/digikala-adservice-banners/a27a8bd8a734c5ceda90adf74254c026ab62fdd1_1618636707.jpg?x-oss-process=image/quality,q_80" alt=""></a></div>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">منتخب جدید کالاها</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">محصولات پرفروش اخیر</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">برندهای ویژه</hr3>
            <br><hr>
        </div>
        <div id="slideShow2"><hr3 style="float: right;margin-right:15px ;margin-top: 15px;">منتخب محصولات تخفیف و حراج</hr3>
            <br><hr>
        </div>
        <div class="d-flex">
            <div class="bargasht"></div>
            <div class="bargasht"><a  style="color: black;font-size:24px ;"  href="#header">برگشت به بالا</a></div>
    </div>
        
        <script src="{{ asset('/js/js1.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.9/jquery.jcarousel.min.js"></script>
    </body>
    </html>