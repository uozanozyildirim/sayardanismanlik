<section class="faqs faqs-2" id="faqs-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="heading heading-18 text-center">
                    <p class="heading-subtitle">Aradığınız sorunun cevabı burada</p>
                    <h2 class="heading-title">SIK SORULAN SORULAR</h2>
                </div>
            </div>
        </div>
        <div class="accordion accordion-2" id="accordion03">
            <div class="row">
                <div class="col-12 col-lg-6">

                    @foreach($frequentlyAskedQuestions as $question)
                        @if($question->id % 2 !== 0)
                    <div>
                        <div class="card active-acc">
                            <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-{{ $question->id }}" href="#collapse01-{{ $question->id }}">{{ $question->title }}</a></div>
                            <div class="collapse" id="collapse01-{{ $question->id }}" data-bs-parent="#accordion03">
                                <div class="card-body">{{ $question->content }}</div>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-12 col-lg-6">

                    @foreach($frequentlyAskedQuestions as $question)
                        @if($question->id % 2 == 0)
                            <div>
                                <div class="card active-acc">
                                    <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-{{ $question->id }}" href="#collapse01-{{ $question->id }}">{{ $question->title }}</a></div>
                                    <div class="collapse" id="collapse01-{{ $question->id }}" data-bs-parent="#accordion03">
                                        <div class="card-body">{{ $question->content }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <div class="container">
        <div class="more-faqs">
            <p>Daha fazla bilgi ve kişisel sorularınız için <a href="/iletisim">iletişime geçiniz! </a></p>
        </div>
    </div>
    <!-- End .container-->
</section>
