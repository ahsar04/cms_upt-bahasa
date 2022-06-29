@extends('layouts.landing-page.index')
@section('titlePage','News | UPT - Bahasa Polije')
@section('content')

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">UPT Bahasa Politeknik Negeri Jember</h4>
                <h1 class="mb-0">News</h1>
            </div>

            <div class="section-body" action="{{ route('news.update', $news->id_news) }}">
            {{ csrf_field() }}
            <div class="card">
            
                <div class="card-body">
                    <h4>{{ $news->headline_news}}</h4>
                    <div class="d-flex mb-3">
                        <small>
                        <i class="far fa-calendar-alt text-primary me-2">
                        </i>{{ date('d-m-y',strtotime($news->created_at))}}</small>
                    </div>
                    <div class="mb-3">
                        <img src="{{ asset('/img/news/'.$news->picture) }}" width="400px" class="d-block">
                    </div>
                    <div class="mb-3">
                        <p>{{ $news->description_news }}</p>
                    </div>
                    <h7>Author : </h7>
                    <h7>{{ $news->author }}</h7>
                </div>
                
            </div>
            </div>

                 

        </div>
    </div>
    
@endsection