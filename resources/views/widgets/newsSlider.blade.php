<section class="projects projects-modern projects-modern-1" id="projects-modern-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="heading heading-5 text-center">
                    <p class="heading-subtitle">Inavasyon, Kalite ve Sürekli Gelişim</p>
                    <h2 class="heading-title">Bizden Haberler</h2>
                </div>
            </div>
        </div>
       @foreach($sliderNews as $tmp)
        <div class="row">
            <div class="col-12">
                <div class="carousel owl-carousel carousel-dots" data-slide="{{ $loop->index }}" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="3000">
                    <div>
                        <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                                <div class="project-img"><a class="link" href="/haber/{{ $tmp->slug  }}"></a><img src="/haber/{{ $tmp->image }}" alt="/haber/{{ $tmp->slug  }}"/></div>
                                <!-- End .project-img-->
                                <div class="project-content">
                                    <div class="project-cat"></div>
                                    <div class="project-title">
                                        <h4><a href="/haber/{{ $tmp->slug }}">{{ $tmp->title }}
                                            </a></h4>
                                    </div>
                                    <div class="project-desc">
                                        <p> {{ $tmp->excerpt  }} </p>
                                    </div>
                                    <div class="project-more"> <a class="btn btn--bordered btn--white" href="/haber/{{ $tmp->slug  }}">Daha Fazla<i class="energia-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
        @endforeach
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
