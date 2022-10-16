@if(isset($spotlightItems)  == 1)
<section  class="slider slider-1" id="slider-1">
    <div class="container-fluid pe-0 ps-0">
        <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
             data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
            @foreach($spotlightItems as $spotlightItem)
            <div  style="min-height: 500px; height: auto;" class="slide bg-overlay bg-overlay-white-slider">
              <div class="bg-section"><img  src="{{ config('app.url')  }}/storage/{{ $spotlightItem->image }}" alt="{{ $spotlightItem->title }}"/></div>
                <div class="container">
                    <div class="row">
                        <div onclick="window.location('{{ $spotlightItem->link }}')" class="col-12 col-lg-7">
                            <div class="slide-content">
                                <h2  class="slide-headline">{{ translateToEnglish($spotlightItem->title)  }}</h2>
                                <p class="slide-desc">
                                    {{ translateToEnglish($spotlightItem->description)  }}</p>
                             </div>
                        </div>
                    </div>
              </div>
            </div>
       @endforeach
        </div>
    </div>
</section>
@endif
