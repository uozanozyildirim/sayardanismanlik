<section class="about about-3" id="about-3">
    <div class="container">
        @foreach($services as $service)
            @if($loop->index % 2 == 0)
            <div style="padding-bottom: 5rem; padding-top: 5rem;" class="row">
            <!--- Right Aligned Section  -->
            <div class="col-12 col-lg-6">
                <div class="heading heading-12">
                    <p style="color: {{ $service->color_code }}" class="heading-subtitle">{{ $service->label }}</p>
                    <h2 class="heading-title">{{ $service->title }}</h2>
                </div>
                <div class="about-block">
                    <div class="block-left">
                        <p class="paragraph">{{  strip_tags(html_entity_decode(($service->excerpt) )) }}</p>
                        <div class="signature-block"><a class="btn btn--secondary" href="/hizmet/{{ $service->slug }}" style="background-color: {{ $service->color_code }}" >{{ translateToEnglish("Devamını Oku") }}<i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .col-lg-6-->
            <div class="col-12 col-lg-5 offset-lg-1">
                <div class="about-img">
                    <div class="about-img-holder bg-overlay">
                        <div class="bg-section"><img src="/storage/{{$service->image}}" alt="about Image"/></div>
                    </div>

                    <div style="background-color: {{ $service->color_code }};" class="counter counter-4">
                            <h6 style="color: white;">{{  translateToEnglish($service->title) }}</h6>
                    </div>
                    <!-- End .counter-->
                </div>
            </div>
            <!--- End Right Aligned Section  -->
        </div>

            @elseif($loop->index % 2 !== 0)

            <!--- Left Aligned Section  -->
        <div style="padding-top: 3rem;" class="row">
            <!--- Right Aligned Section  -->
         <div class="col-12 col-lg-5 offset-lg-1">
                <div class="about-img">
                    <div class="about-img-holder bg-overlay">
                        <div class="bg-section"><img src="/storage/{{ $service->image }}" alt="about Image"/></div>
                    </div>
                    <!-- Start .counter-->
                    <div style="background-color: {{ $service->color_code }}" class="counter counter-4">
                            <h6 style="color: white;">{{  translateToEnglish($service->title)  }}</h6>
                    </div>
                    <!-- End .counter-->
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="heading heading-12">
                    <p style="color: {{ $service->color_code }}" class="heading-subtitle">{{  translateToEnglish($service->label)  }}</p>
                    <h2 class="heading-title">{{  translateToEnglish($service->title)  }}</h2>
                </div>
                <div class="about-block">
                    <div class="block-left">
                        <p class="paragraph">{{ strip_tags(html_entity_decode($service->excerpt)) }}</p>
                        <div class="signature-block"><a class="btn btn--secondary" href="/hizmet/{{ $service->slug }}" style="background-color: {{ $service->color_code }}" >{{ translateToEnglish("Devamını Oku") }} <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .col-lg-6-->
            <!-- End Left Aligned Section -->
        <!-- End .row-->
    </div>
            @endif
            @endforeach

    </div>
    <!-- End .container-->
</section>
