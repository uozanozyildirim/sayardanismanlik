<section class="blog blog-grid blog-grid-5" id="blog">
    <div class="container">
        <div class="row">
            @foreach($tumHaberler as $tekHaber)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span
                                        class="day">{{ date('d-m-Y', strtotime($tekHaber->updated_at))}}</span></div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>{{ translateToEnglish("Yazar")}}: {{  $tekHaber->author_name  }}</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="/haber/{{ $tekHaber->slug  }}">{{ translateToEnglish($tekHaber->title) }}</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="/haber/{{ $tekHaber->slug  }}"><img
                                            src="/storage/{{ $tekHaber->image }}" alt="{{ translateToEnglish($tekHaber->slug)}}"/></a></div>
                                <div class="entry-category"><a
                                        href="{{  translateToEnglish($tekHaber->category_slug)   }}">{{  translateToEnglish($tekHaber->category_title)  }}</a>
                                </div>
                            </div>
                            <div class="entry-bio">
                                <p>{{ translateToEnglish($tekHaber->excerpt)  }}</p>
                            </div>
                            <div class="entry-more"><a class="btn btn--white btn-bordered" href="/haber/{{ $tekHaber->slug }}">{{ translateToEnglish("Devamını Oku") }}                                Oku}}<i
                            class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
