@extends('frontend.layouts.app')
@section('title',' المنتجات   ')
@section('content')

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="category dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">

                    <div class="row dlab-bnr-inr-entry">
                        <div class="col-12">
                            <h1 class="text-white text-center"> المنتجات </h1>
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="بحــث...">
                                <a href="#" class="search_icon"><i class="ti-search"></i></a>
                              </div>

                            <div class="breadcrumb-row text-left">
                                <ul class="list-inline">
                                    <li><a href="index.html">الصفحة الرئيسية</a></li>
                                    <li><a href="index.html">اسم تصنيف للمنتج </a></li>
                                    <li>  المنتجات </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Breadcrumb row -->

                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">


                <div class="section-full content-inner-2 portfolio text-uppercase bg-gray products-section" id="portfolio">
                    <div class="container">
                        <div class="header-title">
                            <h2> المنتجات</h2>
                            <span class="title-border-color">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>


                        <div class="row">

                            @foreach ($products as $product )
                                <div class="col-lg-3 col-md-6">
                                    <div class="dlab-box m-b30 dlab-team1">
                                        <div class="dlab-media">

                                                <img width="358" height="460" alt="" src="{{ asset('images/Products/'.$product->image)}}">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title">{{ $product->ar_name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-lg-3 col-md-6">
                                <div class="dlab-box m-b30 dlab-team1">
                                    <div class="dlab-media">
                                        <a href="javascript:;">
                                            <img width="358" height="460" alt="" src="{{ asset('assets/img/pic3(1).jpg')}}">
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title"><a href="javascript:;">اسم المنتجات المضافه اخيرا</a></h4>

                                    </div>
                                </div>
                            </div> --}}




                        </div>
                        <div class="section-content box-sort-in m-b15">
                            <div class="pagination-bx rounded pagination-sm clearfix">
                                {{ $products->links('paginator') }}
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- Content END -->
@endsection
