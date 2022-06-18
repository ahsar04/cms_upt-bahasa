@extends('layouts.landing-page.index')
@section('titlePage','Procedure to See Result Test | UPT - Bahasa Polije')
@section('content')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">UPT Bahasa Politeknik Negeri Jember</h4>
                <h1 class="mb-0">Procedure to See Result Test</h1>
            </div>

        <div class="container py-5">
        @foreach ($procedure as $item)
        <div class="p-4">
            <div class="d-flex mb-3">
            <div class="col-8">
                <h4 class="mb-3">{{ $item->headline_procedure}}</h4>
                
                    <p>
                        {{ $item->description_procedure}}
                    </p>
                                
                    <a class="mb-3" 
                        >{{ $item->link_procedure}} <i class="bi bi-arrow-right"></i
                    ></a>
            </div>
                                    
                                    
            </div>
                                
        </div>
        @endforeach
        </div>
            
        </div>
</div>
    
@endsection