<section class="about about-1" id="about-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="about-img">
                    <div class="about-img-holder bg-overlay">
                        <div class="bg-section"><img src="{{ $solResimSagYazi['image'] }}" alt="about Image"/></div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-7">
                <div class="heading heading-1">
                <p class="heading-subtitle heading-subtitle-bg">{{ translateToEnglish($solResimSagYazi['kucukYazi'])   }}</p>
                    <h2 class="heading-title">Sürdürülebilir Çevre, <br>
                        Sürdürülebilir Enerji, <br>
                        Yeşil Mutabakat</h2>
                </div>
                <div class="about-block" style="text-align: justify;">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="block-left">
                                <p class="paragraph" style="text-align: justify-all;">{{ translateToEnglish($solResimSagYazi['solBaslik'])  }}</p>
                                <p style="text-align: justify;"> {{  translateToEnglish($solResimSagYazi['solAciklama'])  }} </p>
                                <a href="/hizmetler" class="btn btn--secondary">{{ translateToEnglish('Devamı')}} <i class="energia-arrow-right"></i>
                                </a>
                            </div>
                        </div>
{{--                        <div class="col-12 col-lg-5">--}}
{{--                            <div class="block-right">--}}
{{--                                <div class="prief-set">--}}
{{--                                    <h6>{{ translateToEnglish($solResimSagYazi['sagBaslik'])   }}</h6>--}}

{{--                                    <p>{{  translateToEnglish($solResimSagYazi['sagAciklama'])  }}</p>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <!-- End .col-lg-6-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
