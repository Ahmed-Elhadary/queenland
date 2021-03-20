@extends('dashboard.layouts.app')

@section('content')
 <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-diamond">
                        </i>
                    </div>
                    <div>Edit About Company 
                    </div>
                </div>
                <div class="page-title-actions">

                    <div class="d-inline-block dropdown">
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
        </div>
          <div class="main-card mb-3 card ">
            <div class="card-body">
                <form class="needs-validation " novalidate action="{{route('aboutcompany.update',$about_company->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Company Image</label><br>
                            <img src={{ asset('images/About/'.$about_company->image)}} width="70px" height="70px">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Company Year</label>
                            <input type="text" class="form-control" name="ar_year"  value="{{ $about_company->ar_year }}" id="validationCustom02" placeholder="English name"  >
                        </div>
                              <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Company Year</label>
                            <input type="text" class="form-control" name="en_year"  value="{{ $about_company->en_year }}" id="validationCustom02" placeholder="English name"  >
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Company Name</label>
                            <input type="text" class="form-control" name="ar_company_name" value="{{ $about_company->ar_company_name }}" id="validationCustom02" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Company Name</label>
                            <input type="text" class="form-control" name="en_company_name" value="{{ $about_company->en_company_name }}" id="validationCustom02" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <input type="text" class="form-control" name="ar_details" value="{{ $about_company->ar_details }}" id="validationCustom02" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <input type="text" class="form-control" name="en_details" value="{{ $about_company->en_details }}" id="validationCustom02" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    @method('put')
                    <button class="btn btn-primary" type="submit">Update About Company </button>
                </form>

                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            var forms = document.getElementsByClassName('needs-validation');
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>

    </div>
@endsection
