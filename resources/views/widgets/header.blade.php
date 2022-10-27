<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Svol Danışmanlık"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>{{setting('admin.site_title')}}</title>
    <link href="{{ env('APP_URL') }}/storage/{{ setting('admin.site_favicon')  }}" rel="icon"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="preloader">
    <div class="dual-ring"></div>
</div>

    <header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
        <div class="top-bar">
            <div class="block-left">
                <div class="top-contact">
                    <div class="contact-infos"><i class="energia-phone-Icon"></i>
                        <div class="contact-body">
                            <p>{{ translateToEnglish('İletişim Hattı') }}: <a href="tel:{{ setting('admin.phone_number') }}">{{ setting('admin.phone_number')  }}</a></p>
                        </div>
                    </div>
                    <div class="contact-infos"><i class="energia-email--icon"></i>
                        <div class="contact-body">
                            <p>{{ translateToEnglish("Email")}}: <a href="mailto:{{ setting('admin.email') }}">{{ setting('admin.email') }}</a></p>
                        </div>
                    </div>
                    @if(setting('admin.work_hours'))
                    <div class="contact-infos"><i class="energia-clock-Icon"></i>
                        <div class="contact-body">
                              <p>{{ translateToEnglish("Çalışma Saatleri")}} : {{ setting('admin.work_hours') }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="block-right">
                <!-- Start .social-links-->

                <div class="social-links">
                    <a class="share-whatsapp" href="{{setting('admin.instagram')}}">
                        <img class="energia-facebook social-image"  height="22px" src="/images/instagram.png">
                    </a>
                    <a class="share-instagram" href="{{setting('admin.youtube')}}">
                        <img class="energia-twitter social-image" height="22px" src="/images/youtube.png">
                    </a>
                </div>
                <!-- End .social-links-->
                <div class="topbar-links"><a href="/haberler">{{ translateToEnglish('Haberler') }}</a></div>
                <div class="module module-language">
                    <div class="selected"><img src="/images/module-language/en.png" alt="En Language"/><span>english</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lang-list">
                        <ul>
                            <li data-id="tr"><img data-id="tr" src="/images/module-language/tr.png" alt="Tr Language"/><a data-id="tr" onclick="setLanguageToTr()" href="#">Türkçe</a> </li>
                            <li data-id="en"> <img data-id="en" src="/images/module-language/en.png" alt="En Language"/><a data-id="en" onclick="setLanguageToEn()" href="#">English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand" href="/">
                <img class="logo logo-dark"  src="{{ env('APP_URL') }}/storage/{{setting("admin.site_logo")}}" alt="{{ translateToEnglish("Svol Danismanlik")}}"/>
            <img style="height: 90px;"  class="logo logo-mobile" src="{{ env('APP_URL') }}/storage/{{setting('admin.site_logo')}}" alt="{{ translateToEnglish("Svol Danismanlik")}}"/></a>
            <div class="module-holder module-holder-phone">
                <div class="module module-search">
                    <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                </div>
                <div class="module module-language">
                    <div class="selected"><img src="/images/module-language/en.png" alt="En Language"/><span>english</span><i class="fas fa-chevron-down"></i></div>
                    <div class="lang-list">
                        <ul>
                            <li> <img src="/images/module-language/en.png" id="english" alt="En Language"/><a onclick="setLanguageToTr()" href="#">English</a></li>
                            <li> <img src="/images/module-language/tr.png" alt="AR Language"/><a href="#" onclick="setLanguageToTr()">Türkçe</a></li>
                        </ul>
                    </div>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto">
                    @foreach($mainMenuItems as $item)
                    <li class="nav-item" id="contact"><a href="{{ $item->url  }}"><span>{{  translateToEnglish($item->title) }}</span></a></li>
                    @endforeach
                </ul>
                <div class="module-holder">
                    <div class="module module-search">
                        <div class="module-icon module-icon-search"><i class="energia-search-Icon"></i></div>
                    </div>

                    <div class="module-contact"><a  class="btn btn--primary" href="/iletisim">{{ translateToEnglish('İletişime Geç')  }}<i class="energia-arrow-right"></i></a></div>
                </div>
                <!--  End .module-holder-->
            </div>
            <!--  End .navbar-collapse-->
        </nav>
        <!--  End .navbar-->
    </header>
{{--    <!-- End .header-->--}}

    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="{{ translateToEnglish("Sitede Arama Yapınız")}}"/>
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


