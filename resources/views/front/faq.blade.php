@extends('layouts.guest')
@section('title', $meta_title ?? 'Faq - Web App')
@section('content')
    <main>
        <section class="section">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
                            <h1>Frequently Asked Questions</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="accordion accordion-border-bottom" id="accordionFAQ">
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header accordion-button h5 border-0 {{ $loop->first ? 'active' : '' }}"
                                        id="heading-{{ $faq->id }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $faq->id }}"
                                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                        aria-controls="collapse-{{ $faq->id }}">
                                        {{ $faq->title }}
                                    </h2>
                                    <div id="collapse-{{ $faq->id }}"
                                        class="accordion-collapse collapse border-0 {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="heading-{{ $faq->id }}" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body py-0 content">
                                            {{ $faq->description }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
