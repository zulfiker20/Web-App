@extends('layouts.guest')
@section('title', $meta_title ?? 'BlogDetail - Web App')
@section('content')
    <main>
        <div class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="mb-5">
                            <h2 class="mb-4" style="line-height:1.5">{{ $articles->title }}</h2>
                            <span>{{ $articles->created_at }} <span class="mx-2">/</span> </span>
                            <p class="list-inline-item">Category : <a href="#"
                                    class="ml-1">{{ $articles->category->title }} </a>
                            </p>
                        </div>
                        <div class="mb-5 text-center">
                            <div class="post-slider rounded overflow-hidden">
                                <img loading="lazy" decoding="async" src="{{ asset($articles->image) }}"
                                    alt="Post Thumbnail">

                            </div>
                        </div>
                        <div class="content">
                            {!! $articles->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
