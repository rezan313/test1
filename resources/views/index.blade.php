<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ url('/css/css1.css') }}" rel="stylesheet">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ url('/css/css2.css') }}" rel="stylesheet">
<body>
    
    <div style="height: 10px;"></div>
    <header id="header">
        <div class="btn-toolbar justify-content-between "  role="toolbar" aria-label="Toolbar with button groups">
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
        <div class="btn-toolbar justify-content-between "  role="toolbar" aria-label="Toolbar with button groups">
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
            <div id="slideShowTwo"> 
                <div id="slideShow">
                </div>
                <div id="rightSlide">
                    <img src="https://www.digikala.com/static/files/b6c724a0.png" id="rightSlide" alt="">
                    <button type="button"  class="btn  btn-info " style="float: right;margin-right: 50px;" >مشاهده همه</button>
                </div>
            </div>
            <script src="{{ url('/js/js1.js') }}"></script>
        </body>
        </html>