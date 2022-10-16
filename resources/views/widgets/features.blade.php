<section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1">
    <div class="bg-section"> <img src="/images/background/2.jpg" alt="Background"/></div>
    <div class="container">
        <div class="heading heading-2 heading-light heading-light2">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <p class="heading-subtitle">{{  translateToEnglish($ikiUstYaziAltResim['solKucukYazi'])  }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h2 class="heading-title">{{  translateToEnglish($ikiUstYaziAltResim['solBaslik'])  }}</h2>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <p class="heading-desc">{{  translateToEnglish($ikiUstYaziAltResim['sagBaslik'])  }}</p>
                    <p class="heading-desc">
                        {{  translateToEnglish($ikiUstYaziAltResim['sagAciklama']) }}
                    </p>
                    <div class="actions-holder"><a class="btn btn--primary btn--inversed" href="/">
                    {{  translateToEnglish($ikiUstYaziAltResim['buton1'])  }}
                     <i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white" href="/">
                     {{  translateToEnglish($ikiUstYaziAltResim['buton2'])  }}</a></div>
                </div>
            </div>
            <!-- End .row-->
        </div>

        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="more-features">
                    <p>{{ translateToEnglish('Sorularınız için bizi aramaktan çekinmeyin') }}<a href="tel:01061245741"><br>{{ setting('admin.phone_number') }}</a></p><a class="btn btn--bordered btn--white" href="/iletisim">
                    {{ translateToEnglish('Ücretsiz Bilgi') }}<i class="energia-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <!--
                ============================
                Video #1 Section
                ============================
                -->
                <div class="video video-1 bg-overlay bg-overlay-video" id="video-1">
                    <div class="bg-section"><img src="/images/video/1.jpg" alt="background"/></div><a class="popup-video btn-video" href=" {{  $ikiUstYaziAltResim['videoLink'] }}"> <i class="fas fa-play"></i><span>{{ translateToEnglish('Videomuza Göz Atın') }}</span></a>
                    <!-- End .popup-video-->
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
