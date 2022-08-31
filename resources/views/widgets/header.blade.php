<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ozb Digital"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose energy html5 template"/>
    <title>Svol Danışmanlık</title>
    <link href="/images/favicon/favicon.png" rel="icon"/>
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets==
    -->
    <link href="/css/vendor.min.css" rel="stylesheet"/>
    <link href="/css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="preloader">
    <div class="dual-ring"></div>
</div>
<!-- Document Wrapper-->

    <!--
    ============================
    Header #2
    ============================
    -->
    <header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
        <div class="top-bar">
            <div class="block-left">
                <div class="top-contact">
                    <div class="contact-infos"><i class="energia-phone-Icon"></i>
                        <div class="contact-body">
                            <p>phone: <a href="tel:123-456-7890">+90 538 629 31 41</a></p>
                        </div>
                    </div>
                    <div class="contact-infos"><i class="energia-email--icon"></i>
                        <div class="contact-body">
                            <p>email: <a href="mailto:info@svoldanismanlik.com">info@svoldanismanlik.com</a></p>
                        </div>
                    </div>
                    <div class="contact-infos"><i class="energia-clock-Icon"></i>
                        <div class="contact-body">
                            <p>Çalışma Saatleri : Pazartesi - Cuma: 9.00 – 18.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-right">
                <!-- Start .social-links-->
                <div class="social-links"><a class="share-facebook" href="javascript:void(0)"><i class="energia-facebook"></i></a><a class="share-instagram" href="javascript:void(0)"><i class="energia-twitter"></i></a><a class="share-twitter" href="javascript:void(0)"><i class="energia-youtube"></i></a></div>
                <!-- End .social-links-->
                <div class="topbar-links"><a href="blog-grid.html">Haberler & Galeri</a><a href="page-careers.html">Kariyer</a><a href="page-faqs.html">SSS</a></div>
                <div class="module module-language">
                    <div class="selected"><img src="/images/module-language/en.png" alt="En Language"/><span>english</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lang-list">
                        <ul>
                            <li> <img src="/images/module-language/en.png" alt="En Language"/><a href="#">english</a></li>
                            <li> <img src="/images/module-language/ar.png" alt="AR Language"/><a href="#">arabic</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand" href="index.html"><img class="logo logo-dark" src="/images/logo/svol-cevre-danismanlik-logo.png" alt="Sayar Cevre Danismanlik Logo"/><img class="logo logo-mobile" src="/images/logo/sayar-cevre-danismanlik-logo.png" alt="Sayar Cevre Danismanlik Logo"/></a>
            <div class="module-holder module-holder-phone">
                <div class="module module-search">
                    <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                </div>
                <div class="module module-language">
                    <div class="selected"><img src="/images/module-language/en.png" alt="En Language"/><span>english</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lang-list">
                        <ul>
                            <li> <img src="/images/module-language/en.png" alt="En Language"/><a href="#">english</a></li>
                            <li> <img src="/images/module-language/ar.png" alt="AR Language"/><a href="#">arabic</a></li>
                        </ul>
                    </div>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">
{{--                    <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>projects</span></a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li class="nav-item"><a href="projects-standard.html"><span>projects standard</span></a></li>--}}
{{--                            <li class="nav-item"><a href="projects-modern.html"><span>projects modern</span></a></li>--}}
{{--                            <li class="nav-item"><a href="projects-grid.html"><span>projects grid</span></a></li>--}}
{{--                            <li class="nav-item"><a href="projects-single.html"><span>project single</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>blog</span></a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li class="nav-item"><a href="blog-grid.html"><span>blog grid</span></a></li>--}}
{{--                            <li class="nav-item"><a href="blog-standard.html"><span>blog standard</span></a></li>--}}
{{--                            <li class="nav-item"><a href="blog-single.html"><span>single blog post</span></a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    @php
                    $menus = ['Anasayfa', 'Hakkımızda','Haberler', 'İletişim']
                    @endphp

                    @foreach($menus as $menu)
                    <li class="nav-item" id="contact" data-hover=""><a href="/{{Str::slug($menu) }}"><span>{{ $menu }}</span></a></li>
                    @endforeach
                </ul>
                <div class="module-holder">
                    <div class="module module-search">
                        <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                    </div>
                    <div class="module-contact"><a class="btn btn--primary " href="/iletisim">İletişime Geç<i class="energia-arrow-right"></i></a></div>
                </div>
                <!--  End .module-holder-->
            </div>
            <!--  End .navbar-collapse-->
        </nav>
        <!--  End .navbar-->
    </header>
    <!-- End .header-->
    <!--
    ============================
    Module Search
    ============================
    -->
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter"/>
                            <button></button>
                        </form>
                        <!-- End .form-search -->
                    </div>
                    <!-- End .col-lg-8 -->
                </div>
                <!--  End .row-->
            </div>
            <!--  End .container-->
        </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
        <!-- End .module-cancel-->
    </div>
