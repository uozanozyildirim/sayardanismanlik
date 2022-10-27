@include('widgets.header')

<section class="service-single" id="service-single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 order-1">

                <div class="sidebar sidebar-service">
                    <!-- Services-->
                  @if(empty($subServices) === false)

                    <div class="widget widget-services">
                        <div class="widget-title">
                            <h5>{{ translateToEnglish('Hizmet Kategorilerimiz')}}</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                @foreach($subServices as $service)
                                <li><a href="/hizmet/{{ $service->slug }}"> <span>{{ $service->title }}</span><i class="energia-arrow-right"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End .widget-services -->
                    <!-- Reservation-->
                  @endif


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

                      @include('widgets.faqByService')

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
