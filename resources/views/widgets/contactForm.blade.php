<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
    <div class="bg-section"><img src="/images/background/3.jpg" alt="background"/></div>
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-6">
                <p class="heading-subtitle">{{ translateToEnglish('Svol Danışmanlık') }}</p>
                <h2 class="heading-title"> {{ translateToEnglish('Sürdürülebilirlik konusunda mevzuatlara uygun size özel bir çözüm üretelim!') }} </h2>
                <div class="contact-action"><a class="btn btn--white" href="/hizmetlerimiz">{{ translateToEnglish("Daha Fazlası İçin")}}<i
                            class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                                                                   href="/hakkimizda">{{ translateToEnglish('Değerlerimiz')}}</a></div>
                <div class="contact-quote"><img src="/images/icons/noteicon.png" alt="icon"/>
                    <p>{{ translateToEnglish('Formu doldurun, aynı gün teklif alın!') }} <a
                            href="tel:{{ setting('admin.phone_number') }}"><br>{{ setting('admin.phone_number') }}</a></p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading"> {{ translateToEnglish('İletişime Geçin!') }} </h5>
                    <p class="card-desc">{{ translateToEnglish('Formu doldurun, aynı gün teklif alın!') }}  </p>
                    <form class="contactForm" method="post" action="/php/contact.php">
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <label class="form-label" for="select-2">{{ translateToEnglish('Size nasıl yardımcı olabiliriz?') }}</label>
                                <select class="form-control" id="select-2">
                                    <option value="default">{{ translateToEnglish('Hizmet Almak istediğiniz konu?') }} </option>
                                    <option value="s1">{{ translateToEnglish('Çevre - Atık Yönetimi') }}</option>
                                    <option value="s2">{{ translateToEnglish('Kalite Sistemleri') }}</option>
                                    <option value="s3">{{ translateToEnglish('Kimyasalların Kaydı - GBT')}}</option>
                                    <option value="s4">{{ translateToEnglish('Sosyal Uygunluk Danışmanlığı') }} </option>
                                    <option value="s5">{{ translateToEnglish('Enerji Yönetimi')  }} </option>
                                    <option value="s6">{{ translateToEnglish('İş Güvenliği')  }}</option>
                                    <option value="s7">{{ translateToEnglish('Eğitim') }} </option>
                                    <option value="s8">{{ translateToEnglish('Karbon Ayak İzi')}}</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">{{ translateToEnglish('İletişim kanalı seçimi:') }} </label>
                                <div class="custom-radio-group" id="custom-radio-group">
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline1"
                                               name="customRadioInline1"/>
                                        <label for="customRadioInline1">{{ translateToEnglish('Tümü') }}</label>
                                    </div>
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline2"
                                               name="customRadioInline1"/>
                                        <label for="customRadioInline2">{{ translateToEnglish('email')}}</label>
                                    </div>
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline3"
                                               name="customRadioInline1"/>
                                        <label for="customRadioInline3">{{ translateToEnglish('telefon')}}</label>
                                    </div>
                                </div>
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
