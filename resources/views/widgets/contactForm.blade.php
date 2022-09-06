<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
    <div class="bg-section"><img src="/images/background/3.jpg" alt="background"/></div>
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-6">
                <p class="heading-subtitle">Güneş panellerinizin performasını arttırın!</p>
                <h2 class="heading-title">Güneş Panelleri ile özgürlüğün tadını çıkarın</h2>
                <div class="contact-action"><a class="btn btn--white" href="page-about.html">Daha Fazlası İçin<i
                            class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                                                                   href="page-faqs.html">Değerlerimiz</a></div>
                <div class="contact-quote"><img src="/images/icons/noteicon.png" alt="icon"/>
                    <p>Formu doldurun, aynı gün teklif alın! <a
                            href="tel:{{ setting('admin.phone_number') }}">Tel: <br>{{ setting('admin.phone_number') }}</a></p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading">İletişime Geçin!</h5>
                    <p class="card-desc">Formu doldurun, aynı gün teklif alın! </p>
                    <form class="contactForm" method="post" action="/php/contact.php">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-1">Hangi konuda yardım almak istiyorsunuz?</label>
                                <select class="form-control" id="select-1">
                                    <option value="default">Mevzuat</option>
                                    <option value="AL">foreign contractor</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="select-2">Bütçeniz?</label>
                                <select class="form-control" id="select-2">
                                    <option value="default">5.000-10.000 TL</option>
                                    <option value="AL">6:12 months</option>
                                    <option value="AK">12:24 months</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">İletişim kanalı seçimi:</label>
                                <div class="custom-radio-group" id="custom-radio-group">
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline1"
                                               name="customRadioInline1"/>
                                        <label for="customRadioInline1">Tümü</label>
                                    </div>
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline2"
                                               name="customRadioInline1"/>
                                        <label for="customRadioInline2">email</label>
                                    </div>
                                    <div class="custom-control">
                                        <input class="custom-control-input" type="radio" id="customRadioInline3"
                                               name="customRadioInline1"/>
                                        <label for="customRadioInline3">telefon</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn--secondary w-100">Gönder <i
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
