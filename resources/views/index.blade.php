@extends('frontend.layouts.app')
@section('title','كوين لاند ')
@section('content')


        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->
            <div class="demo-2 loading">
                <div class="slideshow">
                    <div class="slides">
                        <div class="slide slide--current">
                            <div class="slide__img" style="background-image: url(assets/img/slide9.jpg);">
                                <div class="overlay">
                                </div>
                            </div>
                            <h3 class="slide__title">كوين لاند</h3>
                            <p class="slide__desc">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>
                            <a href="#home-about">
                                <div class="arrow-container ">
                                    <div class="arrow-2">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="arrow-1 animated hinge infinite zoomIn"></div>
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <div class="slide__img" style="background-image: url(assets/img/10.jpg);">
                                <div class="overlay">
                                </div>
                            </div>
                            <h3 class="slide__title">كوين لاند</h3>
                            <p class="slide__desc">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>
                            <a href="#home-about" class="slide__link">
                                <div class="arrow-container ">
                                    <div class="arrow-2">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="arrow-1 animated hinge infinite zoomIn"></div>
                                </div>
                            </a>
                        </div>
                        <div class="slide">
                            <div class="slide__img" style="background-image: url(assets/img/slide10.jpg);">
                                <div class="overlay">
                                </div>
                            </div>
                            <h3 class="slide__title">كوين لاند</h3>
                            <p class="slide__desc">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>
                            <a href="#home-about" class="slide__link">
                                <div class="arrow-container ">
                                    <div class="arrow-2">
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="arrow-1 animated hinge infinite zoomIn"></div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <nav class="slidenav">


                        <button class="slidenav__item slidenav__item--next">
                            <a class="animated-arrow-right ">
                                <span class="the-arrow -left">
                                    <span class="shaft"></span>
                                </span>
                                <span class="circle"></span>
                                <span class="the-arrow -right">
                                    <span class="shaft"></span>
                                </span>
                                </span>
                            </a>
                        </button>
                        <button class="slidenav__item slidenav__item--prev" style="display: none;">
                            <a class="animated-arrow-left">
                                <span class="the-arrow -left">
                                    <span class="shaft"></span>
                                </span>
                                <span class="circle"></span>
                                <span class="the-arrow -right">
                                    <span class="shaft"></span>
                                </span>
                                </span>
                            </a>
                        </button>
                    </nav>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block" id="home-about">
                <!-- Content Section -->
                <div class="section-full content-inner const-about">
                    <div class="container">
                        <div class="header-title">
                            <h2>عن كوين لاند </h2>
                            <span class="title-border-color">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-sm-12 col-12 " data-wow-duration="2s"
                                data-wow-delay="0.3s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInRight;">
                                <div class="radius-sm m-b30 img-ho1">
                                    <div class="img-border">
                                        <img src="{{ asset('assets/img/pic11(1).jpg')}}" alt="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12 " data-wow-duration="2s"
                                data-wow-delay="0.6s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <div class="content-bx1">
                                    <div class="about-year"> <span>15</span>
                                        <p>سنوات<br>تجربة<br>العمل</p>
                                    </div>
                                    <div class="section-head style2">
                                        <h2 class="title">كوين لاند</h2>
                                        <p>
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر
                                            من الفقرات يتيح لك مولد
                                            النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء
                                            لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل
                                            فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                        </p>
                                    </div>
                                    <a href="#" class="site-button m-r10 m-b10 btnhover20">عرض المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Section End -->
                <!-- team -->

                <div class="section-full bg-gray content-inner">
                    <div class="container">
                        <div class="header-title">
                            <h2>الهيكل الإدارى </h2>
                            <span class="title-border-color-content-innner">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 wow bounceInLeft" data-wow-duration="2s"
                                data-wow-delay="0.2s"
                                style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                                <div class="dlab-box m-b30 dlab-team5">
                                    <div class="dlab-border-left"></div>
                                    <div class="dlab-border-right"></div>
                                    <div class="dlab-media">
                                        <a href="javascript:;"> <img width="358" height="460" alt=""
                                                src="{{ asset('assets/img/pic1(2).jpg')}}">
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title"><a
                                                href="https://industry.dexignzone.com/xhtml-rtl/team-1.html">ناشيد
                                                مارتينز</a></h4> <span class="dlab-position">مخرج</span>
                                        <ul class="dlab-social-icon">
                                            <li>
                                                <a class="site-button circle-sm white fa fa-facebook"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-twitter"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-linkedin"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-pinterest"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 wow bounceInDown" data-wow-duration="2s"
                                data-wow-delay="0.4s"
                                style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                                <div class="dlab-box m-b30 dlab-team5">
                                    <div class="dlab-border-left"></div>
                                    <div class="dlab-border-right"></div>
                                    <div class="dlab-media">
                                        <a href="javascript:;"> <img alt="" src="{{ asset('assets/img/pic2(2).jpg')}}"> </a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title"><a
                                                href="https://industry.dexignzone.com/xhtml-rtl/team-1.html">كون
                                                باكفيلد</a></h4> <span class="dlab-position">مصمم</span>
                                        <ul class="dlab-social-icon">
                                            <li>
                                                <a class="site-button circle-sm white fa fa-facebook"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-twitter"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-linkedin"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-pinterest"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6  wow bounceInUp" data-wow-duration="2s"
                                data-wow-delay="0.6s"
                                style="visibility: hidden; animation-duration: 2s; animation-delay: 0.6s; animation-name: none;">
                                <div class="dlab-box m-b30 dlab-team5">
                                    <div class="dlab-border-left"></div>
                                    <div class="dlab-border-right"></div>
                                    <div class="dlab-media">
                                        <a href="javascript:;"> <img alt="" src="{{ asset('assets/img/pic3(1).jpg')}}"> </a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title"><a
                                                href="https://industry.dexignzone.com/xhtml-rtl/team-1.html">هاكسون
                                                ويلينجهام</a></h4> <span class="dlab-position">مطور</span>
                                        <ul class="dlab-social-icon">
                                            <li>
                                                <a class="site-button circle-sm white fa fa-facebook"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-twitter"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-linkedin"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-pinterest"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 wow bounceInRight" data-wow-duration="2s"
                                data-wow-delay="0.8s"
                                style="visibility: hidden; animation-duration: 2s; animation-delay: 0.8s; animation-name: none;">
                                <div class="dlab-box m-b30 dlab-team5">
                                    <div class="dlab-border-left"></div>
                                    <div class="dlab-border-right"></div>
                                    <div class="dlab-media">
                                        <a href="javascript:;"> <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}"> </a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title"><a
                                                href="https://industry.dexignzone.com/xhtml-rtl/team-1.html">كون
                                                باكفيلد</a></h4> <span class="dlab-position">مدير</span>
                                        <ul class="dlab-social-icon">
                                            <li>
                                                <a class="site-button circle-sm white fa fa-facebook"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-twitter"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-linkedin"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                            <li>
                                                <a class="site-button circle-sm white fa fa-pinterest"
                                                    href="javascript:void(0);"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="site-button m-r10 m-b10 btnhover20 ">عرض المزيد</a>
                    </div>
                </div>

                <!-- new product -->

                <div class="section-full bg-white content-inner-2" >
                    <div class="container">
                        <div class="header-title">
                            <h2>المنتجات الجديدة </h2>
                            <span class="title-border-color">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="img-carousel owl-carousel owl-theme owl-none dots-style-3 owl-rtl owl-drag">

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: fadeInUp;">

                                            <div class="dlab-box m-b30 dlab-team1">
                                                <div class="dlab-media">
                                                    <a href="javascript:;">
                                                        <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>
                                                    <a href="#"><span class="dlab-position">قراءة المزيد ..</span></a>

                                                </div>
                                            </div>

                                        </div>
                            </div>
                        <div class="text-center">
                            <a href="#" class="site-button m-r10 m-b10 btnhover20 ">عرض المزيد</a>
                        </div>
                    </div>
                </div>

                <!-- end new product -->
<!-- required -->

                 <div class="section-full content-inner  bg-gray" id="client">
                    <div class="container">
                        <div class="header-title">
                            <h2>إراء العملاء </h2>
                            <span class="title-border-color-testimonial">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div
                            class="testimonial-six owl-loaded owl-theme owl-carousel owl-none dots-style-3 owl-rtl owl-drag">

                            <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: bounceInUp;">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>لوريم إيبسوم هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. لطالما
                                            كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ أن أخذت
                                            الطابعة مجموعة من الأنواع وخلطتها لصنعها.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow"><img src="{{ asset('assets/img/pic2(2).jpg')}}"
                                                width="100" height="100" alt=""></div>
                                        <h5 class="testimonial-name m-t0 m-b5">ديفيد ماتين</h5> <span
                                            class="testimonial-position">طالب علم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: bounceInUp;">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>لوريم إيبسوم هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. لطالما
                                            كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ أن أخذت
                                            الطابعة مجموعة من الأنواع وخلطتها لصنعها.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow"><img src="{{ asset('assets/img/pic2(2).jpg')}}"
                                                width="100" height="100" alt=""></div>
                                        <h5 class="testimonial-name m-t0 m-b5">ديفيد ماتين</h5> <span
                                            class="testimonial-position">طالب علم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.9s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.9s; animation-name: bounceInUp;">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>لوريم إيبسوم هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. لطالما
                                            كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ أن أخذت
                                            الطابعة مجموعة من الأنواع وخلطتها لصنعها.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow"><img src="{{ asset('assets/img/pic2(2).jpg')}}"
                                                width="100" height="100" alt=""></div>
                                        <h5 class="testimonial-name m-t0 m-b5">ديفيد ماتين</h5> <span
                                            class="testimonial-position">طالب علم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.3s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: bounceInUp;">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>لوريم إيبسوم هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. لطالما
                                            كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ أن أخذت
                                            الطابعة مجموعة من الأنواع وخلطتها لصنعها.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow"><img src="{{ asset('assets/img/pic2(2).jpg')}}"
                                                width="100" height="100" alt=""></div>
                                        <h5 class="testimonial-name m-t0 m-b5">ديفيد ماتين</h5> <span
                                            class="testimonial-position">طالب علم</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item wow bounceInUp" data-wow-duration="2s" data-wow-delay="0.6s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.6s; animation-name: bounceInUp;">
                                <div class="testimonial-8">
                                    <div class="testimonial-text">
                                        <p>لوريم إيبسوم هو ببساطة نص وهمي لصناعة الطباعة والتنضيد. لطالما
                                            كان لوريم إيبسوم هو النص الوهمي القياسي في الصناعة منذ أن أخذت
                                            الطابعة مجموعة من الأنواع وخلطتها لصنعها.</p>
                                    </div>
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic radius shadow"><img src="{{ asset('assets/img/pic2(2).jpg')}}"
                                                width="100" height="100" alt=""></div>
                                        <h5 class="testimonial-name m-t0 m-b5">ديفيد ماتين</h5> <span
                                            class="testimonial-position">طالب علم</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

</div>
        </div>
        <!-- Content END -->


@endsection
