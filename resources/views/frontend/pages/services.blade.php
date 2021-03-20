@extends('frontend.layouts.app')
@section('title',' الخدمات   ')
@section('content')
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg">  الخدمات</span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">الخدمات </h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.html">الصفحة الرئيسية</a></li>
                                <li> الخدمات </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">

                <div class="section-full content-inner bg-gray">
                    <div class="container">

                        <div class="header-title">
                            <h2>الخدمات </h2>
                            <span class="title-border-color">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="section-content row">
                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        <div class="icon-bx-wraper" data-name="01">
                                            <div class="icon-lg">
                                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">عنوان الخدمة</h2>
                                                <p>أبجد هوز الجزر، وتحسين المطور الجامعي، الحوار الاقتصادي الاستراتيجي  تعويض الأداء </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        <div class="icon-bx-wraper" data-name="02">
                                            <div class="icon-lg">
                                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-factory-1"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">عنوان الخدمة</h2>
                                                <p>أبجد هوز الجزر، وتحسين المطور الجامعي، الحوار الاقتصادي الاستراتيجي  تعويض الأداء </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        <div class="icon-bx-wraper" data-name="03">
                                            <div class="icon-lg">
                                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-station"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">عنوان الخدمة</h2>
                                                <p>أبجد هوز الجزر، وتحسين المطور الجامعي، الحوار الاقتصادي الاستراتيجي  تعويض الأداء </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        <div class="icon-bx-wraper" data-name="04">
                                            <div class="icon-lg">
                                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-fuel-truck"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">عنوان الخدمة</h2>
                                                <p>أبجد هوز الجزر، وتحسين المطور الجامعي، الحوار الاقتصادي الاستراتيجي  تعويض الأداء </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        <div class="icon-bx-wraper" data-name="05">
                                            <div class="icon-lg">
                                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-conveyor-1"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">عنوان الخدمة</h2>
                                                <p>أبجد هوز الجزر، وتحسين المطور الجامعي، الحوار الاقتصادي الاستراتيجي  تعويض الأداء </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 service-box style3">
                                        <div class="icon-bx-wraper" data-name="06">
                                            <div class="icon-lg">
                                                <a href="javascript:void(0);" class="icon-cell"><i class="flaticon-engineer-1"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">عنوان الخدمة</h2>
                                                <p>أبجد هوز الجزر، وتحسين المطور الجامعي، الحوار الاقتصادي الاستراتيجي  تعويض الأداء </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                            <div class="p-a30  clearfix radius-sm" style="background: #FFF;">
                                <h3 class="m-b10">أرسل لنا رسالة</h3>
                                <div class="dzFormMsg"></div>
                                <form method="post" class="dzForm" action="script/contact.php">
                                <input type="hidden" value="Contact" name="dzToDo">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzName" type="text" required="" class="form-control" placeholder="اسمك">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzEmail" type="email" class="form-control" required="" placeholder=" رقم التليفون  الخاص بك">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input name="dzEmail" type="email" class="form-control" required="" placeholder=" البريد الإلكتروني الخاص بك">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <textarea name="dzMessage" rows="4" class="form-control" required="" placeholder="رسالتك..."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button name="submit" type="submit" value="Submit" class="site-button "> <span>إرسال</span> </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- Content END -->
    @endsection
