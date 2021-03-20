@extends('frontend.layouts.app')
@section('title',' تواصل معنا ')
@section('content')
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg"> تواصل معنا</span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">تواصل معنا</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.html">الصفحة الرئيسية</a></li>
                                <li>تواصل معنا </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">


                <div class="section-full content-inner bg-white contact-style-1">
                    <div class="container">
                        <div class="header-title">
                            <h2>تواصل معنا </h2>
                            <span class="title-border-color">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="row">
                            <!-- right part start -->
                            <div class="col-lg-4 col-md-6 d-flex m-b30">
                                <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
                                    <h3 class="m-b5">اتصال سريع</h3>
                                    <p> لو لديك أي أسئلة ببساطة استخدم تفاصيل الاتصال التالية.</p>
                                    <ul class="no-margin">
                                        <li class="icon-bx-wraper left m-b30">
                                            <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dlab-tilte">عنوان:</h6>
                                                <p>القاهره..............</p>
                                            </div>
                                        </li>
                                        <li class="icon-bx-wraper left  m-b30">
                                            <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dlab-tilte">البريد الإلكتروني:</h6>
                                                <p>info@example.com</p>
                                            </div>
                                        </li>
                                        <li class="icon-bx-wraper left">
                                            <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                            <div class="icon-content">
                                                <h6 class="text-uppercase m-tb0 dlab-tilte">هاتف</h6>
                                                <p>+00 1234 5678 90</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="m-t20">
                                        <ul class="dlab-social-icon border dlab-social-icon-lg">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- right part END -->
                            <!-- Left part start -->
                            <div class="col-lg-8 col-md-6  mb-4 m-b30 mb-md-0">
                                <div class="p-a30 bg-gray clearfix radius-sm">
                                    <h3 class="m-b10">أرسل لنا رسالة</h3>
                                    <div class="dzFormMsg"></div>
                                    <form method="post" action="{{ route('contactus.store') }}"  class="" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="name" type="text" required="" class="form-control" placeholder="اسمك">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="phone" type="text" class="form-control" required="" placeholder=" رقم التليفون  الخاص بك">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input name="email" type="email" class="form-control" required="" placeholder=" البريد الإلكتروني الخاص بك">
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <textarea name="message" rows="4" class="form-control" required="" placeholder="رسالتك..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <button type="submit"   class="site-button m-r10 m-b10 btnhover20"> إرسال</button>
                                            </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Left part END -->
                            {{-- <div class="col-lg-4 d-flex m-b30">
                                <div id="map" style="width: 100%;">
                                    <iframe style="height: 510px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024243.9267794383!2d29.84117368380947!3d29.396658659771152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1574787295873!5m2!1sen!2seg" width="100%" height="350px"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>





            </div>
        </div>
        <!-- Content END -->
@endsection
