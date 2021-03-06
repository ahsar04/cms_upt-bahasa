@extends('layouts.landing-page.index')
@section('titlePage','Course | UPT - Bahasa Polije')
@section('content')
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">UPT Bahasa Politeknik Negeri Jember</h4>
                <h1 class="mb-0" style="text-transform:capitalize;">  {{$title}}</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                    @foreach ($training as $item)
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3 col-4"
                                        ><i
                                            class="far fa-user text-primary me-2"
                                        > Quota: </i
                                        ><br>{{ $item->quota }} </small
                                    >
                                    <small class="me-3 col-4"
                                        ><i
                                            class="far fa-calendar-alt text-primary me-2"
                                        > Opening date: </i
                                        ><br>{{ $item->opening_date }} </small
                                    >
                                    <small class="me-3 col-4"
                                        ><i
                                            class="far fa-calendar-alt text-primary me-2"
                                        > Closing date: </i
                                        ><br>{{ $item->closing_date }} </small
                                    >
                                </div>
                                <h4 class="mb-3">{{ $item->training}}</h4>
                                <p>
                                    {{ $item->description_training}}
                                </p>
                                <small
                                        ><i
                                            class="far fa-calendar-alt text-primary me-2"
                                        > Excercise date</i
                                        >{{ $item->excercise_date }}</small
                                    ><br>
                                <div class="row">
                                    <div class="col-7"></div>
                                    <div class="col-5">
                                        <a class="text-uppercase" href="{{ route( 'login')}}"
                                            >Read More <i class="bi bi-arrow-right"></i
                                        ></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
   
    
@endsection