@extends('frontend.layouts.app')
@section('title',' التصنيف الرئيسي ')
@section('content')


        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="category dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <div class="row dlab-bnr-inr-entry">
                        <div class="col-12">
                            <h1 class="text-white text-center">تصنيف المنتجات </h1>
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="بحــث...">
                                <a href="#" class="search_icon"><i class="ti-search"></i></a>
                              </div>

                            <div class="breadcrumb-row text-left">
                                <ul class="list-inline">
                                    <li><a href="index.html">الصفحة الرئيسية</a></li>
                                    <li> تصنيف المنتجات </li>
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


                <div class="section-full content-inner-2 portfolio text-uppercase bg-gray category-section" id="portfolio">
                    <div class="container">
                        <div class="header-title">
                            <h2>تصنيف المنتجات</h2>
                            <span class="title-border-color">
                                <i class="ti-spray" aria-hidden="true"></i>
                            </span>
                        </div>


                        <div class="row">
                            @foreach ($categories as $category )
                                <div class="col-lg-3 col-md-6">
                                    <div class="indurance-feature-item">
                                        <div class="feature-image">
                                            <img src="{{ asset('images/Main_Category/'.$category->image)}}" alt="">
                                        </div>
                                        <a href="{{ route('products',$category->id) }}">
                                            <div class="feature-content">
                                                <h5 class="title">{{ $category->ar_name }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-lg-3 col-md-6">
                                <div class="indurance-feature-item">
                                    <div class="feature-image">
                                        <img src="{{ asset('assets/img/11.jpg')}}" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h5 class="title">اسم تصنيف لمنتجات كوين لاند</h5>
                                    </div>
                                </div>
                            </div> --}}



                        </div>

                        <div class="section-content box-sort-in m-b15">
                            <div class="pagination-bx rounded pagination-sm clearfix">
                                {{ $categories->links('paginator') }}
                            </div>
                        </div>


                    </div>
                </div>




            </div>
        </div>
        <!-- Content END -->
 @endsection
