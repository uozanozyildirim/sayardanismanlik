@include('widgets.header')

<section class="service-single" id="service-single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 order-1">

                <div class="sidebar sidebar-service">
                    <!-- Services-->
                    <div class="widget widget-services">
                        <div class="widget-title">
                            <h5>Hizmet Kategorilerimiz</h5>
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
                            <p>Bize iletişim adreslerimden ulaşabilirsiniz </p><a class="btn btn--bordered btn--white" href="/iletisim">Lütfen Görüşme İçin Rezervasyon Yapınız</a><a href="tel:05355232114"><span class="energia-phone-Icon"></span>+90 535 523 21 14</a>
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
                            <h5 class="entry-heading"> {{$haberDetay->title}} </h5>
                            <div>{{ strip_tags(html_entity_decode($haberDetay->content))  }}</div>
                            <div class="row">
                                <div class="col-12 p-2 col-md-6"><img width="100%" src="/storage/{{ $haberDetay->image }}" alt="image"/></div>
{{--                                <div class="col-12 col-md-6"><img src="/storage/{{ $haberDetay->image }}" alt="image"/></div>--}}
{{--                                <div class="col-12 col-md-6"><img src="/images/services/single/2.jpg" alt="image"/></div>--}}
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
                        <div class="entry-benefits entry-infos">
                            <h5 class="entry-heading">key benefits</h5>
                            <div class="accordion accordion-2" id="accordion03">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For Me?</a></div>
                                            <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                                            <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card active-acc">
                                            <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                                            <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
