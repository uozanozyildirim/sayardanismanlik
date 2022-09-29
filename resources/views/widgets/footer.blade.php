<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
{{--                        @foreach($footerMenuItems as $item)--}}
                        <div class="footer-widget-title">
                            <h5>Kurumsal</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="page-about.html">Hakkımızda</a></li>
                                <li><a href="page-team.html">Ekibimiz</a></li>
                                <li><a href="blog-grid.html">Blog</a></li>
                                <li><a href="projects-standard.html">Projeler</a></li>
                                <li><a href="page-contact.html">İletişim</a></li>
                            </ul>
                        </div>
{{--                        @endforeach--}}
                    </div>
                </div>
                <!--  End .col-lg-2-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>Hizmetlerimiz</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="services-turbines.html">Güneş Paneli Mevzuatı</a></li>
                                <li><a href="services-turbines.html">Rüzgar Paneli Mevzuatı</a></li>
                                <li><a href="services-turbines.html">Fosil Yakıtlar</a></li>
                                <li><a href="services-turbines.html">Biyoyakıt Mevzuatı</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-2-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-5">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>Destek</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="page-contact.html">Kişisel Bilgileri Koruma Kanunu</a></li>
                                <li><a href="page-contact.html">KVVK Hükümleri</a></li>
                                <li><a href="page-contact.html">Çerezler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-5-->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>
                                <li class="phone"><a style="font-size: 24px;" href="tel:{{ setting('admin.phone_number') }}">{{ setting('admin.phone_number') }}</a></li>
                                <li class="email">Email: <a href="mailto:{{setting('admin.email')}}">{{setting('admin.email')}}</a></li>
                                <li class="address">
                                    <p>{{setting('admin.address')}}</p>
                                </li>
                                <li class="directions"><a href="/contact"><i class="energia-location-Icon"></i>Konum Bilgisi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-3-->
            </div>
            <!-- End .row-->
        </div>
        <!--  End .container-->
    </div>
    <!--  End .footer-top-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright">
                        <div class="copyright"><span>&copy; 2022 Svol Danışmanlık. Tüm Hakları Saklıdır </span>
                            <ul class="list-unstyled social-icons">
                                <li><a class="share-facebook" href="{{setting('admin.facebook')}}"><i class="energia-facebook"></i>facebook
                                    </a></li>
                                <li><a class="share-twitter" href="{{setting('admin.twitter')}}"><i class="energia-twitter"></i>twitter</a>
                                </li>
                                <li><a class="share-youtube" href="{{setting("admin.youtube")}}"><i class="energia-youtube"></i>youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  End .row-->
    </div>
    <!--  End .footer-bottom-->
</footer>



<div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
<!--  Footer Scripts==
-->
<script src="/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/functions.js"></script>
</body>
</html>




