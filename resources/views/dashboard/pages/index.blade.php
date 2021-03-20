@extends('dashboard.layouts.app')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Analytics Dashboard
                    <div class="page-title-subheading">This is an example dashboard created using
                        build-in elements and components.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">

                <div class="d-inline-block dropdown">

                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                    Products
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">Product::count()</div>
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
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Products</div>
                        {{-- <div class="widget-subheading">Last year expenses</div> --}}
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white">{{ $product->count() }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">People</div>
                        {{-- <div class="widget-subheading">Total Clients Profit</div> --}}
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $people->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Admins</div>
                        {{-- <div class="widget-subheading">People Interested</div> --}}
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $admins->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
    @endsection
