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
                                @foreach($categories as $category)
                                    <li><a href="{{ $category->slug }}"> <span>{{ $category->name }}</span><i class="energia-arrow-right"></i></a></li>
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
                            <h3 class="entry-heading"> {{$serviceDetail->title}} </h3>
                        <div class="entry-introduction entry-infos">
                            <h5 class="entry-heading"> {{$serviceDetail->excerpt}} </h5>
                            <div class="row">
                                <div class="col-12 p-2 col-md-6"><img width="100%" src="/storage/{{ $serviceDetail->image }}" alt="image"/></div>

                            </div>
                            <div><p>{{ strip_tags(html_entity_decode($serviceDetail->body))  }}</p></div>

                        </div>


{{--                                                <div class="entry-video entry-infos">--}}
{{--                                                    <h5 class="entry-heading">how it works?!</h5>--}}
{{--                                                    <p class="entry-desc">It has been argued that expanding use of wind power will lead to increasing geopolitical competition over critical materials for wind turbines such as rare earth elements neodymium, praseodymium, and dysprosium. But this perspective has been criticised for failing to recognise that most wind turbines.</p>--}}
{{--                                                    <!----}}
{{--                                                    ============================--}}
{{--                                                    Video #3 Section--}}
{{--                                                    ============================--}}
{{--                                                    -->--}}
{{--                                                    <div class="video video-3" id="video-3">--}}
{{--                                                        <div class="bg-section"><img src="/images/video/3.jpg" alt="background"/></div><a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>--}}
{{--                                                        <!-- End .popup-video-->--}}
{{--                                                    </div>--}}
{{--                                                    <!-- End .video-->--}}
{{--                                                </div>--}}


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
