<!doctype html>
<html lang="fr">

@include('partials.head')

<body>

    <div class="cursor"></div>
    <div class="cursor2"></div>


    <div class="preloader_area_wrap">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <div class="main">




        <header class="position_top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col col-sm-3 col-md-3 col-lg-3 col-xl-2">
                        <div class="logo">
                            <a href="{{ route('accueil.index') }}"><img style="width: 80px;" src="assets/img/logo_1.png" alt></a>
                        </div>
                    </div>
                    <div class="col col-sm-5 col-md-6 col-lg-6 col-xl-8 text-end">
                        <nav class="main-nav">
                            <div class="mobile-menu-logo">
                                <a href="{{ route('accueil.index') }}"><img src="assets/img/propulser_.png" alt></a>
                            </div>
                            <ul>
                                <li class="has-child active">
                                    <a href="{{ route('accueil.index') }}">Accueil</a>

                                </li>
                                <li><a href="{{ route('apropos.index') }}">Apropos</a></li>
                                <li class="has-child">
                                    <a href="{{ route('services.index') }}">Services</a>
                                    <i class="bi bi-chevron-down"></i>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('services.index') }}">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="{{ route('projets.index') }}">Projets</a>
                                    <i class="bi bi-chevron-down"></i>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('projets.index') }}">Projets</a></li>
                                        <li><a href="project2.html">Projet masonry</a></li>
                                        <li><a href="project-details.html"> Details projets</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="blog.html">Blogs</a>
                                    <i class="bi bi-chevron-down"></i>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog2.html">Blog standard</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('contact.index') }}">Contact </a></li>
                            </ul>
                            <div class="get-quate dn">
                                <div class="cmn-btn">
                                    <a href="{{ route('contact.index') }}">Avoir un devis </a>
                                </div>
                            </div>
                        </nav>
                        <div class="mobile-menu">
                            <a href="javascript:void(0)" class="cross-btn">
                                <span class="cross-top"></span>
                                <span class="cross-middle"></span>
                                <span class="cross-bottom"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-end">
                        <div class="get-quate">
                            <div class="cmn-btn">
                                <a href="{{ route('contact.index') }}">Avoir un devis </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')

        @include('partials.footer')

        <div class="scroll-top">
            <span>Top<i class="bi bi-arrow-up"></i></span>
        </div>

    </div>

    @include('partials.script')

</body>

</html>