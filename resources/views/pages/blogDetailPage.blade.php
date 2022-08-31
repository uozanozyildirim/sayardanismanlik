@include('widgets.header')

<section class="service-single" id="service-single">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 order-1">
                <!--
                ============================
                Services Sidebar
                ============================
                -->
                <div class="sidebar sidebar-service">
                    <!-- Services-->
                    <div class="widget widget-services">
                        <div class="widget-title">
                            <h5>our services</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li><a href="services-panels.html"> <span>solar panels</span><i class="energia-arrow-right"></i></a></li>
                                <li><a href="services-turbines.html"> <span>wind turbines</span><i class="energia-arrow-right"></i></a></li>
                                <li><a href="services-plants.html"> <span>hydropower plants</span><i class="energia-arrow-right"></i></a></li>
                                <li><a href="services-resources.html"> <span>fossil resources</span><i class="energia-arrow-right"></i></a></li>
                                <li><a href="services-materials.html"> <span>battery materials</span><i class="energia-arrow-right"></i></a></li>
                                <li><a href="services-controllers.html"> <span>charge controllers</span><i class="energia-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End .widget-services -->
                    <!-- Reservation-->
                    <div class="widget widget-reservation"><img src="/images/blog/sidebar/reservation.jpg" alt="img"/>
                        <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                            <p>Please feel welcome to contact our friendly reception staff with any general or medical enquiry call us</p><a class="btn btn--bordered btn--white" href="page-contact.html">schedule an appintment</a><a href="tel:0106123214"><span class="energia-phone-Icon"></span> 0106123214</a>
                        </div>
                    </div>
                    <!-- End .widget-reservation-->
                </div>
                <!-- End .sidebar-->
            </div>
            <div class="col-12 col-lg-8 order-0 order-lg-2">
                <!-- Start .service-entry-->
                <div class="service-entry">
                    <div class="entry-content">
                        <div class="entry-introduction entry-infos">
                            <h5 class="entry-heading"> {{$haberDetay->title}} </h5>
                            <div>{{  $haberDetay->body }}</div>
                            <div class="row">
                                <div class="col-12 col-md-6"><img src="/images/services/single/1.jpg" alt="image"/></div>
                                <div class="col-12 col-md-6"><img src="/images/services/single/2.jpg" alt="image"/></div>
                            </div>
                        </div>
                        <div class="entry-stats entry-infos">
                            <h5 class="entry-heading">stats &amp; charts </h5>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p class="entry-desc">Our mix of company-owned and contractor  allows us to retain optimal levels of control whilst expanding our reach to over 96% of towns in Australia. With 40 years of LTL experience, we are now a trusted LTL freight provider for shippers of all sizes and commodity types.</p>
                                    <p class="entry-desc">
                                        Our LTL service extends to all states and territories, and includes multiple per-week services to places many others only serve occasionally, including Darwin, Alice Springs, Newman, Mt. Isa, Launceston and Burnie.</p>
                                    <p class="entry-desc">
                                        We pride ourselves on providing the best transport and shipping services currently available in Australia. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience, ensure all freight is are shipped, trans-shipped and delivered as safely as possible.</p>
                                </div>
                                <div class="col-12 col-lg-6"> <img class="entry-chart" src="/images/charts/chart-1.png" alt="Chart image"/></div>
                            </div>
                        </div>
                        <div class="entry-processes">
                            <div class="entry-body">
                                <div class="process-icon">
                                    <div class="bg-section"> <img src="/images/counters/1.jpg" alt="img"/></div><i class="flaticon-020-factory"></i>
                                </div>
                                <div class="processes processes-2">
                                    <div class="processes-holder">
                                        <div class="carousel owl-carousel carousel-dots process-content-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="false" data-speed="800">
                                            <div>
                                                <div class="process-panel process-panel-dark">
                                                    <div class="process-body">
                                                        <div class="process-content">
                                                            <h5>01. we design &amp; ship</h5>
                                                            <p>We collaborate with you to design and deliver a system that meets your utility usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be worried or compromise with your money or with your effort.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="process-panel process-panel-dark">
                                                    <div class="process-body">
                                                        <div class="process-content">
                                                            <h5>02. contract or install</h5>
                                                            <p>Whether you want to install the system or hire local contractors, managing installation yourself ensures the fastest return on your solar investment.We deliver a system that meets your utility usage and needs, We also selecting equipment from.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="process-panel process-panel-dark">
                                                    <div class="process-body">
                                                        <div class="process-content">
                                                            <h5>03. power your home</h5>
                                                            <p>Even after your system is installed and operating, you can always count on Wholesale Solar to provide the support you need, just contact us at any time, and we will be there for you. Whether you want to install the system or hire local contractors.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="images-holder">
                                <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-drag="false" data-nav="true" data-dots="false" data-space="0" data-loop="false" data-speed="800"><img src="/images/processes/1.jpg" alt="process"/><img src="/images/processes/2.jpg" alt="process"/><img src="/images/processes/3.jpg" alt="process"/></div>
                            </div>
                        </div>
                        <div class="entry-video entry-infos">
                            <h5 class="entry-heading">how it works?!</h5>
                            <p class="entry-desc">It has been argued that expanding use of wind power will lead to increasing geopolitical competition over critical materials for wind turbines such as rare earth elements neodymium, praseodymium, and dysprosium. But this perspective has been criticised for failing to recognise that most wind turbines.</p>
                            <!--
                            ============================
                            Video #3 Section
                            ============================
                            -->
                            <div class="video video-3" id="video-3">
                                <div class="bg-section"><img src="/images/video/3.jpg" alt="background"/></div><a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>
                                <!-- End .popup-video-->
                            </div>
                            <!-- End .video-->
                        </div>
                        <div class="entry-benefits entry-infos">
                            <h5 class="entry-heading">key benefits</h5>
                            <div class="accordion accordion-2" id="accordion03">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For Me?</a></div>
                                            <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                                            <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card active-acc">
                                            <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                                            <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                                <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .service-entry-->
            </div>
            <!-- End .col-lg-8-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>

@include('widgets.footer')
