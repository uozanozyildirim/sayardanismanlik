<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
            @foreach($footerMainItems as $item)
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>{{ translateToEnglish($item->title) }}</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                              @foreach($footerSubMenuItems as $subItem)
                                  @if($item->id == $subItem->parent_id)
                                        <li><a href="{{ $subItem->url }}">{{ translateToEnglish($subItem->title)  }}</a></li>
                                  @endif
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
                <!--  End .col-lg-5-->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>
                                <li class="phone"><a style="font-size: 24px;" href="tel:{{ setting('admin.phone_number') }}">{{ setting('admin.phone_number') }}</a></li>
                                <li class="email">{{ translateToEnglish('E-posta')}}: <a href="mailto:{{setting('admin.email')}}">{{setting('admin.email')}}</a></li>
                                <li class="address">
                                    <p>{{setting('admin.address')}}</p>
                                </li>
                                <li class="directions"><a href="/iletisim"><i class="energia-location-Icon"></i>{{ translateToEnglish('Konum Bilgisi') }}</a></li>
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
                        <div class="copyright"><span>{{ translateToEnglish('2022 Svol Danışmanlık. Tüm Hakları Saklıdır')}}</span>
                            <ul class="list-unstyled social-icons">
                                <li><a class="share-facebook" href="{{setting('admin.facebook')}}"><i class="energia-facebook"></i>facebook</a></li>
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
</body>
</html>


<link href="/css/vendor.min.css" rel="stylesheet"/>
<link href="/css/style.css" rel="stylesheet"/>
<script src="/js/vendor/jquery-3.6.0.min.js"></script>
<script src="/js/vendor.js"></script>
<script src="/js/functions.js"></script>


<script>

    const setLanguageToTr = function() {

        var localeLanguage;

        localeLanguage = {"language":"Tr"};

        $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{route('anasayfa.changeLanguage')}}",
            data: localeLanguage, // serializes the form's elements.
            success: function (localeLanguage) {

                setTimeout(function() {
                    location.reload();
                }, 100);

                // alert(localeLanguage); // show response from the php script.
            }
            // });

        });

       };

    const setLanguageToEn = function() {

        var localeLanguage;

        localeLanguage = {"language":"En"};


        $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{route('anasayfa.changeLanguage')}}",
            data: localeLanguage, // serializes the form's elements.
            success: function (localeLanguage) {

                setTimeout(function() {
                    location.reload();
                }, 100);
            }
            });



    };

</script>



