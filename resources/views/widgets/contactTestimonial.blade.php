<section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
    <div class="bg-section"><img src="assets/images/background/wavy-pattern.png" alt="background"/></div>
    <div class="container">
        <div class="contact-panel contact-panel-2">
            <div class="row">
                <div class="col-12 col-lg-5 img-card-holder">
                    <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                        <div class="bg-section"><img src="assets/images/contact/2.jpg" alt="image"/></div>
                        <div class="card-content">
                            <div class="content-top">x
                                <h3 style="color: white; font-size: 35px;">{{ translateToEnglish("Sürdürülebilirlik konusunda mevzuatlara uygun size özel bir çözüm üretelim!") }} </h3>
                            </div>
                            <div class="content-bottom">
                                <ul class="list-unstyled contact-infos">
                                    <li class="contact-info"><i class="energia-phone-Icon"></i>
                                        <p>{{ translateToEnglish("İletişim Hattı")}}: <a href="tel:{{ setting('admin.phone_number') }}">{{ setting('admin.phone_number') }}</a></p>
                                    </li>
                                    <li class="contact-info"><i class="energia-location-Icon"></i>
                                        <p>{{ translateToEnglish('Lokasyon') }}: <a href="mailto:{{ setting('admin.email') }}">{{ setting('admin.address') }}</a></p>
                                    </li>
                                    @if(empty(setting('admin.phone_number')) === 0)
                                    <li class="contact-info"><i class="energia-clock-Icon"></i>
                                        <p>{{ setting('admin.work_hours') }}</p>
                                    </li>
                                    @endif
                                </ul><a class="btn btn--white" href="/hakkimizda">{{ translateToEnglish("Hakkımızda")}}<i class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="contact-card">
                        <div class="contact-body">
                            <h5 class="card-heading">{{ translateToEnglish("İletişime Geçin!") }}</h5>
                            <p class="card-desc">{{ translateToEnglish("Formu doldurun, aynı gün teklif alın!")}}

                            </p>
                            <form class="contactForm" method="post" action="assets/php/contact.php">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text" id="contact-name" name="contact-name" placeholder="{{ translateToEnglish("Isim")}}" required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text" id="contact-email" name="contact-email" placeholder="{{ translateToEnglish("E-posta")}}" required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input class="form-control" type="text" id="contact-phone" name="contact-phone" placeholder="{{ translateToEnglish("İletişim Numarası")}}" required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <select class="form-control" id="select-1">
                                            <option value="default">{{ translateToEnglish("Hizmet Almak istediğiniz konu?")}}</option>
                                            <option value="s1">{{ translateToEnglish("Çevre - Atık Yönetimi") }} </option>
                                            <option value="s2">{{ translateToEnglish("Kalite Sistemleri")}}</option>
                                            <option value="s4">{{ translateToEnglish("Sosyal Uygunluk Danışmanlığı") }}  </option>
                                            <option value="s5">{{ translateToEnglish("Enerji Yönetimi")}}</option>
                                            <option value="s6">{{ translateToEnglish("İş Güvenliği")}}</option>
                                            <option value="s7">{{ translateToEnglish("Eğitim")}}</option>
                                            <option value="s8">{{ translateToEnglish("Karbon Ayak İzi")}}</option>
                                            <option value="s3">{{ translateToEnglish("Kimyasalların Kaydı - GBT") }} </option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" id="contact-infos" placeholder="Sorunuz?" name="contact-infos" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn--secondary">{{ translateToEnglish("Kaydet")}}<i class="energia-arrow-right"></i></button>
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
            </div>
            <!-- End .row-->
        </div>
        <!-- End .contact-panel-->
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
