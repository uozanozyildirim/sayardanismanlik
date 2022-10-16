<section class="about about-3" id="about-3">
    <div class="container">
        @foreach($services as $service)
            @if($loop->index % 2 == 0)
            <div style="padding-bottom: 5rem; padding-top: 5rem;" class="row">
            <!--- Right Aligned Section  -->
            <div class="col-12 col-lg-6">
                <div class="heading heading-12">
                    <p style="color: {{ $service->color_code }}" class="heading-subtitle">{{ translateToEnglish($service->label) }}</p>
                    <h2 class="heading-title">{{  translateToEnglish($service->title)  }}</h2>
                </div>

                <!-- Accordion Table --->

                <div class="accordion accordion-2" id="accordion03">
                    <div class="row">
                        <div class="col-8  offset-2">

                            @foreach($subServices as $subService)
                                @if($service->id == $subService->parent_id)
                                    <div onclick="window.location = '/hizmet/{{$subService->slug}}' ">
                                        <div class="card active-acc">
                                            <div class="card-heading">
                                                <a style="color: {{ $subService->color_code }}" class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-{{ $subService->id }}" href="#collapse01-{{ $subService->id }}">
                                                    {{ translateToEnglish($subService->title)  }}
                                                </a></div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Accordion End -->
                <div class="about-block">
                    <div class="block-left">
{{--                        <p class="paragraph">{{  strip_tags(html_entity_decode(translateToEnglish($service->excerpt) )) }}</p>--}}
                        <div class="signature-block">
{{--                            <a class="btn btn--secondary" href="/hizmet/{{ $service->slug }}" style="background-color: {{ $service->color_code }}" >{{ translateToEnglish("Devamını Oku") }}<i class="energia-arrow-right">--}}
{{--                                    --}}
{{--                                </i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .col-lg-6-->
            <div class="col-12 col-lg-5 offset-lg-1">
                <div class="about-img">
                    <a href="/hizmet/{{ $service->slug }}">
                    <div class="about-img-holder bg-overlay">
                        <div class="bg-section">
                            <img src="{{ config('app.url') }}/storage/{{$service->image}}" alt="about Image"/>
                        </div>
                    </div>

                    <div style="background-color: {{ $service->color_code }};" class="counter counter-4">
                            <h6 style="color: white;">{{  translateToEnglish($service->title) }}</h6>
                    </div>
                    <!-- End .counter-->
                    </a>
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
                    <a href="/hizmet/{{ $service->slug }}">
                    <div class="about-img-holder bg-overlay">
                       <div class="bg-section"><img src="{{config('app.url')}}/storage/{{ $service->image }}" alt="about Image"/></div>
                    </div>
                    </a>
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

                    <!-- Accordion Table --->

                    <div class="accordion accordion-2" id="accordion03">
                        <div class="row">
                            <div class="col-8  offset-2">

                                @foreach($subServices as $subService)
                                    @if($service->id == $subService->parent_id)
                                        <div onclick="window.location = '/hizmet/{{$subService->slug}}' ">
                                            <div class="card active-acc m-5">
                                                <div class="card-heading">
                                                    <a style="color: {{ $subService->color_code }}" class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-{{ $subService->id }}" href="#collapse01-{{ $subService->id }}">
                                                        {{ translateToEnglish($subService->title)  }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Accordion End -->

                </div>
                <div class="about-block">
                    <div class="block-left">
{{--                        <p class="paragraph">{{ strip_tags(html_entity_decode(translateToEnglish($service->excerpt) )) }}</p>--}}
                        <div class="signature-block">
{{--                            <a class="btn btn--secondary" href="/hizmet/{{ $service->slug }}" style="background-color: {{ $service->color_code }}" >{{ translateToEnglish("Devamını Oku") }} <i class="energia-arrow-right"></i></a>--}}
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
