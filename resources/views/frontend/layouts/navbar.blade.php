        <!-- header -->
        <header class="site-header mo-left header-transparent box-header header" style="height: 116px;">
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion logo-dark">
                            <a href="#"><img src="{{ asset('assets/img/logo.jpg')}}" alt=""></a>
                        </div>
                        <!-- nav toggle button --><button class="navbar-toggler collapsed navicon justify-content-end"
                            type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span> <span></span> <span></span> </button>
                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button radius-no">
                                    بحـث
                                </button>
                            </div>
                        </div>
                        <!-- Quik search -->

                        <div class="dlab-quik-search ">
                            <form action="https://industry.dexignzone.com/xhtml-rtl/index-5.html#">
                                <input name="search" value="" type="text" class="form-control" placeholder="اكتب للبحث">
                                <span id="quik-search-remove"><i style="color:#FFF" class="ti-close"></i></span>
                                <!-- class="ti-close" -->
                            </form>
                        </div>
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header d-md-block d-lg-none">
                                <a href="https://industry.dexignzone.com/xhtml-rtl/index.html"><img src="{{ asset('assets/img/logo-3.png')}}"
                                        alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active has-mega-menu homedemo"> <a href="{{ route('homePage') }}">الصفحة الرئيسية</a></li>
                                <li class=" has-mega-menu homedemo"> <a href="{{ route('about') }}">من نحن</a></li>

                                <li class="has-mega-menu"> <a href="{{ route('category') }}">المنتجات<i
                                            class="fa fa-chevron-down"></i></a>
                                    <ul class="mega-menu">
                                        <li> <a href="javascript:;">الصفحات</a>
                                            <ul>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/about-1.html">عنا
                                                        1</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/about-2.html">عنا
                                                        2</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/services-1.html">الخدمات
                                                        1</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/services-2.html">الخدمات
                                                        2</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/services-details.html">تفاصيل
                                                        الخدمات</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">الصفحات</a>
                                            <ul>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/team-1.html">فريق
                                                        1</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/team-2.html">فريق
                                                        2</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/faq-1.html">الأسئلة
                                                        الشائعة 1</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/faq-2.html">الأسئلة
                                                        الشائعة 2</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/portfolio-grid-2.html">شبكة
                                                        محفظة 2</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">الصفحات</a>
                                            <ul>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/portfolio-grid-3.html">شبكة
                                                        المحفظة 3</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/portfolio-grid-4.html">شبكة
                                                        المحفظة 4</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/portfolio-details.html">تفاصيل
                                                        المحفظة</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/error-403.html">خطأ
                                                        403</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/error-404.html">خطأ
                                                        404</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="javascript:;">الصفحات</a>
                                            <ul>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/error-405.html">خطأ
                                                        405</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/coming-soon-1.html">قريبًا
                                                        1</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/coming-soon-2.html">قريبًا
                                                        2</a></li>
                                                <li><a href="https://industry.dexignzone.com/xhtml-rtl/help-desk.html">مكتب
                                                        المساعدة</a></li>
                                                <li><a
                                                        href="https://industry.dexignzone.com/xhtml-rtl/privacy-policy.html">سياسة
                                                        خاصة</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" has-mega-menu homedemo"> <a href="{{ route('services') }}">الخدمات</a></li>
                                <li class=" has-mega-menu homedemo"> <a href="{{ route('employee') }}">الهيكل الإدارى</a></li>
                                <li class=" has-mega-menu homedemo"> <a href="{{ route('contact') }}">تواصل معنا</a></li>

                            </ul>
                            <div class="dlab-social-icon">
                                <ul>
                                    <li>
                                        <a class="site-button facebook circle-sm outline fa fa-facebook"
                                            href="javascript:void(0);"></a>
                                    </li>
                                    <li>
                                        <a class="site-button twitter circle-sm outline fa fa-twitter"
                                            href="javascript:void(0);"></a>
                                    </li>
                                    <li>
                                        <a class="site-button linkedin circle-sm outline fa fa-linkedin"
                                            href="javascript:void(0);"></a>
                                    </li>
                                    <li>
                                        <a class="site-button instagram circle-sm outline fa fa-instagram"
                                            href="javascript:void(0);"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->
