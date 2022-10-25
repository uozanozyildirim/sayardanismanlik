<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
    <div class="bg-section"><img src="/images/background/3.jpg" alt="background"/></div>
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-6">
                <p class="heading-subtitle">{{ translateToEnglish('Svol Danışmanlık') }}</p>
                <h2 class="heading-title"> {{ translateToEnglish('Sürdürülebilirlik konusunda mevzuatlara uygun size özel bir çözüm üretelim!') }} </h2>
{{--                <div class="contact-action"><a class="btn btn--white" href="/hizmetler">{{ translateToEnglish("Daha Fazlası İçin")}}<i--}}
{{--                            class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"--}}
{{--                                                                   href="/hakkimizda">{{ translateToEnglish('Değerlerimiz')}}</a></div>--}}
                <div class="contact-quote">
{{--                    <p>{{ translateToEnglish('Formu doldurun, aynı gün teklif alın!') }} <a--}}
{{--                            href="tel:{{ setting('admin.phone_number') }}"><br>{{ setting('admin.phone_number') }}</a></p>--}}
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading"> {{ translateToEnglish('İletişime Geçin!') }} </h5>
                    <p class="card-desc">{{ translateToEnglish('Formu doldurun, aynı gün teklif alın!') }}  </p>
                    <form class="contactForm" method="post" action="/php/contact.php">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <label class="form-label" for="select-2">{{ translateToEnglish('Size nasıl yardımcı olabiliriz? *') }}</label>
                                <br><input class="form-control" type="textbox" placeholder="Mesajınız" required><br>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-2">{{ translateToEnglish('Email Adresiniz?') }}</label>
                                <br><input class="form-control" type="email" placeholder="Email"><br>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-2">{{ translateToEnglish('Telefon Numaranız?*') }}</label>
                                <br><input class="form-control" type="tel" placeholder="Telefon" required><br>
                            </div>

                            <div class="col-12">
                                <button class="btn btn--secondary w-100">{{ translateToEnglish('Gönder') }} <i
                                        class="energia-arrow-right"></i></button>
                            </div>
                            <div class="col-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End .contact-body -->
            </div>
        </div>
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>
