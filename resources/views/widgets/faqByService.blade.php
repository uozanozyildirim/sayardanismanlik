@if(isset($frequentlyAskedQuestions) === 1)
    <div class="entry-benefits entry-infos">
        <h5 class="entry-heading">{{ translateToEnglish('Sık Sorulan Sorular')}}</h5>
        <div class="accordion accordion-2" id="accordion03">
            <div class="row">
                @foreach($frequentlyAskedQuestions as $faq)
                    <div class="col-12">
                        <div class="card">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-{{ $faq->id }}" href="#collapse01-{{ $faq->id }}">{{ $faq->title }}</a></div>
                            <div class="collapse" id="collapse01-{{ $faq->id }}" data-bs-parent="#accordion03">
                                <div class="card-body">{{ $faq->content }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
