<section class="projects projects-grid" id="projects-grid-1">
        <div class="heading heading-8" >
            <div style="margin-top: 75px; margin-bottom: 0;">
                <div class="col-12">
                    <h2 class="heading-title">Bizden Haberler</h2>
                </div>
                <div class="carousel mt-5 owl-carousel" data-slide="4" data-slide-rs="1" data-center="data-center" data-autoplay="true" data-nav="true" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                    @foreach($haberSlider as $row)
                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="/haber/{{ $row->slug }}"></a><img style="width: 100%; height: 200px;" src="/storage/{{ $row->image  }}" alt="{{ $row->slug }}"/></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="/haber/{{ $row->slug }}">{{ $row->title }}</a></h4>
                                        </div>
                                        <div class="project-cat"><a href="/haber/{{ $row->slug }}">{{ $row->category_title }}</a>
                                        </div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End .row-->
    <!-- End .container-->
    <!-- End .carousel-->

    <!-- End .container-->
</section>



