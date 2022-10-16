@include('widgets.header')

<section class="service-single" id="service-single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 order-1">
                <div class="sidebar sidebar-service">
                    <!-- Services-->
                    <div class="widget widget-services">
                        <div class="widget-title">
                            <h5>{{ translateToEnglish('Hizmet Kategorilerimiz')}}</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                @foreach($services as $service)
                                <li><a href="/hizmet/{{ $service->slug }}"> <span>{{ $service->title }}</span><i class="energia-arrow-right"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End .widget-services -->
                    <!-- Reservation-->


                    <div class="widget widget-reservation"><img src="/images/blog/sidebar/reservation.jpg" alt="img"/>
                        <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                            <p>{{ translateToEnglish('Bize iletişim adreslerimden ulaşabilirsiniz') }}</p><a class="btn btn--bordered btn--white" href="/iletisim">{{ translateToEnglish('Lütfen Görüşme İçin Rezervasyon Yapınız') }}</a><a href="tel:05355232114"><span class="energia-phone-Icon"></span>{{ setting('admin.phone_number') }}</a>
                        </div>
                    </div>
                    <!-- End .widget-reservation-->
                </div>
                <!-- End .sidebar-->
            </div>

            <div class="col-12 col-lg-8 order-0 order-lg-2">
                <!-- Start .service-entry-->
                <div class="service-entry">
                    <div class="entry-content">
                        <div class="entry-introduction entry-infos">
                            <h5 class="entry-heading"> {{$serviceDetail->title}} </h5>
                            <div>{{ strip_tags(html_entity_decode($serviceDetail->content))  }}</div>
                            <div class="row">
                                <div class="col-12 p-2 col-md-6"><img width="100%" src="{{ config('app.url')  }}/storage/{{ $serviceDetail->image }}" alt="image"/></div>

                            </div>
                        </div>


{{--                        <div class="entry-video entry-infos">--}}
{{--                            <h5 class="entry-heading">how it works?!</h5>--}}
{{--                            <p class="entry-desc">It has been argued that expanding use of wind power will lead to increasing geopolitical competition over critical materials for wind turbines such as rare earth elements neodymium, praseodymium, and dysprosium. But this perspective has been criticised for failing to recognise that most wind turbines.</p>--}}
{{--                            <!----}}
{{--                            ============================--}}
{{--                            Video #3 Section--}}
{{--                            ============================--}}
{{--                            -->--}}
{{--                            <div class="video video-3" id="video-3">--}}
{{--                                <div class="bg-section"><img src="/images/video/3.jpg" alt="background"/></div><a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>--}}
{{--                                <!-- End .popup-video-->--}}
{{--                            </div>--}}
{{--                            <!-- End .video-->--}}
{{--                        </div>--}}


                        @if(($frequentlyAskedQuestions))
                        <div class="entry-benefits entry-infos">
                            <h5 class="entry-heading">{{ translateToEnglish('Sık Sorulan Sorular')}}</h5>
                            <div class="accordion accordion-2" id="accordion03">
                                <div class="row">
                                   @foreach($frequentlyAskedQuestions as $faq)
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-{{ $faq->id }}" href="#collapse01-{{ $faq->id }}">{{ $faq->title }}</a></div>
                                            <div class="collapse" id="collapse01-{{ $faq->id }}" data-bs-parent="#accordion03">
                                                <div class="card-body">{{ $faq->content }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- End .service-entry-->
            </div>
            <!-- End .col-lg-8-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

@include('widgets.footer')

@if($serviceDetail->color_code)

    <style>

    .widget{
        background-color: {{ $serviceDetail->color_code }};

    }

</style>
@endif

@if($serviceDetail->color_code)

    <style>

        .btn--primary:before {
            background-color: {{ $serviceDetail->color_code }};
        }

        .module-contact .btn {
            background-color: {{ $serviceDetail->color_code }};
        }

    </style>

@endif

@if($serviceDetail->color_code)

    <style>


        .back-top {
            background-color: {{ $serviceDetail->color_code }};
        }

    </style>

@endif
