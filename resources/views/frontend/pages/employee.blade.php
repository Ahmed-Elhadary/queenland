@extends('frontend.layouts.app')
@section('title',' الهيكل الإدارى  ')
@section('content')

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Slider -->

            <div class="dlab-bnr-inr overlay-black-dark banner-content " style="background-image:url(assets/img/slide10.jpg);">
                <div class="container">
                    <span class="text-bg"> الهيكل الإدارى</span>
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">الهيكل الإدارى</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.html">الصفحة الرئيسية</a></li>
                                <li>الهيكل الإدارى </li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>

            <!-- Slider END -->
            <!-- contact area -->
            <div class="content-block">


                <div class="section-full content-inner-2 portfolio text-uppercase bg-gray" id="portfolio">
                    <div class="container">
                        <div class="site-filters clearfix center  m-b40">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>الكل</span></a>
                                </li>
                                @foreach ($positions as $position)
                                <li data-filter="{{ $position->title }}" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl">
                                        <span> {{ $position->title }} </span></a>
                                 </li>
                                @endforeach

                                {{-- <li data-filter="advertising" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>مجلس ادارة
                                    </span></a>
                                </li>
                                <li data-filter="branding" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>مجموعة المستشارين
                                    </span></a>
                                </li>
                                <li data-filter="design" class="btn">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button-secondry button-sm radius-xl"><span>المديرين</span></a>
                                </li> --}}

                            </ul>
                        </div>
                        <div class="clearfix" id="lightgallery">
                            <ul id="masonry" class="portfolio-ic dlab-gallery-listing gallery-grid-4 lightgallery text-center" style="position: relative; height: 3568.87px;">
                              @foreach ($people as $person)
                              <li class="{{ $person->position->title }} design card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 0px; top: 0px;">
                                <a class="blogArrow"  data-toggle="modal" data-target="#exampleModalCenter"
                                    data-ar_name="{{ $person->ar_name }}" data-image='{{ $person->image }}'
                                    data-ar_job_title ='{{ $person->ar_job_title }}' data-ar_details="{{ $person->ar_details }}"
                                    data-facebook="{{ $person->facebook }}" data-twitter="{{ $person->twitter }}"
                                    data-instagram="{{ $person->instagram }}" data-gmail="{{ $person->gmail }}"
                                    data-linkedin="{{ $person->linkedin }}">
                                <div class="dlab-box m-b30  dlab-team6">
                                    <div class="dlab-border-left"></div>
                                    <div class="dlab-border-right"></div>
                                    <div class="dlab-media">
                                            <img alt="" src="{{ asset('images/People/'.$person->image)}}">
                                    </div>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title"><a >{{ $person->ar_name }}</a></h4>
                                        <span class="dlab-position">{{ $person->ar_job_title }}</span>
                                    </div>
                                </div>
                            </a>

                            </li>
                              @endforeach

                               {{-- <li class="branding design photography card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 0px; top: 594px;">
                                    <a class="blogArrow"  data-catalogue_details='test data' >
                                    <div class="dlab-box m-b30  dlab-team6">
                                        <div class="dlab-border-left"></div>
                                        <div class="dlab-border-right"></div>
                                        <div class="dlab-media">
                                                <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}">
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a >ناشيد مارتينز</a></h4>
                                            <span class="dlab-position">مدير</span>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="web design card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 585px; top: 594px;">
                                    <a class="blogArrow"  data-catalogue_details='test data' >
                                    <div class="dlab-box m-b30  dlab-team6">
                                        <div class="dlab-border-left"></div>
                                        <div class="dlab-border-right"></div>
                                        <div class="dlab-media">
                                                <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}">
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a >ناشيد مارتينز</a></h4>
                                            <span class="dlab-position">مدير</span>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                 <li class="web branding card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 0px; top: 1189px;">
                                    <a class="blogArrow"  data-catalogue_details='test data' >
                                    <div class="dlab-box m-b30  dlab-team6">
                                        <div class="dlab-border-left"></div>
                                        <div class="dlab-border-right"></div>
                                        <div class="dlab-media">
                                                <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}">
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a >ناشيد مارتينز</a></h4>
                                            <span class="dlab-position">مدير</span>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 585px; top: 1189px;">
                                    <a class="blogArrow"  data-catalogue_details='test data' >
                                    <div class="dlab-box m-b30  dlab-team6">
                                        <div class="dlab-border-left"></div>
                                        <div class="dlab-border-right"></div>
                                        <div class="dlab-media">
                                                <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}">
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a >ناشيد مارتينز</a></h4>
                                            <span class="dlab-position">مدير</span>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="web branding card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 0px; top: 1784px;">
                                    <a class="blogArrow"  data-catalogue_details='test data' >
                                    <div class="dlab-box m-b30  dlab-team6">
                                        <div class="dlab-border-left"></div>
                                        <div class="dlab-border-right"></div>
                                        <div class="dlab-media">
                                                <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}">
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a >ناشيد مارتينز</a></h4>
                                            <span class="dlab-position">مدير</span>
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="advertising design photography card-container col-lg-3 col-md-4 col-sm-6 p-a0 p-1" style="position: absolute; left: 585px; top: 1784px;">
                                    <a class="blogArrow"  data-catalogue_details='test data' >
                                    <div class="dlab-box m-b30  dlab-team6">
                                        <div class="dlab-border-left"></div>
                                        <div class="dlab-border-right"></div>
                                        <div class="dlab-media">
                                                <img alt="" src="{{ asset('assets/img/pic4(1).jpg')}}">
                                        </div>
                                        <div class="dlab-info ">
                                            <h4 class="dlab-title"><a >ناشيد مارتينز</a></h4>
                                            <span class="dlab-position">مدير</span>
                                        </div>
                                    </div>
                                    </a>
                                </li> --}}

                            </ul>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- Content END -->

        <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade modal-employee text-center" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">تفاصيل الموظف </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img class="modal-image"  alt="">
            <h3 class="modal-name"> </h3>
            <h4 class="modal-position"></h4>
            <p class="modal-description"></p>
            <ul class="modal-social">
                <li>
                    <a class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a class="google" target="_blank"><i class="fa fa-google"></i></a>
                </li>
                <li>
                    <a class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>

            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


     @endsection
@push('custom-scripts')

<script>
$('#exampleModalCenter').on('show.bs.modal',function(e){

    $('.modal-employee .modal-social li').show();

    var btntarget = $(e.relatedTarget);
    var ar_name = btntarget.data('ar_name');
    var image = btntarget.data('image');
    var ar_details = btntarget.data('ar_details');
    var facebook = btntarget.data('facebook');
    var twitter = btntarget.data('twitter');
    var instagram = btntarget.data('instagram');
    var linkedin = btntarget.data('linkedin');
    var gmail = btntarget.data('gmail');
    var ar_job_title = btntarget.data('ar_job_title');

    var ss="{{ asset('images/People') }}/"+image;

    $('.modal-employee .modal-name').text(ar_name);
    $('.modal-employee .modal-description').text(ar_details);
    $('.modal-employee .modal-image').attr("src", ss);
    $('.modal-employee .modal-position').text(ar_job_title);
    if(facebook){
        $('.modal-employee .modal-social .facebook').attr("href",facebook);
    }else{
        $('.modal-employee .modal-social .facebook').parent().hide();
    }
    if(twitter){
        $('.modal-employee .modal-social .twitter').attr("href",twitter);
    }else{
        $('.modal-employee .modal-social .twitter').parent().hide();
    }
    if(instagram){
        $('.modal-employee .modal-social .instagram').attr("href",instagram);
    }else{
        $('.modal-employee .modal-social .instagram').parent().hide();
    }
    if(linkedin){
        $('.modal-employee .modal-social .linkedin').attr("href",linkedin);
    }else{
        $('.modal-employee .modal-social .linkedin').parent().hide();
    }
    if(gmail){
        $('.modal-employee .modal-social .google').attr("href",gmail);
    }else{
        $('.modal-employee .modal-social .google').parent().hide();
    }

});

</script>
@endpush
