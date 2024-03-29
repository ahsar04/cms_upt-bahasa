@extends('layouts.landing-page.index')
@section('titlePage','Teaching Staff | UPT - Bahasa Polije')
@section('content')
    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Teaching Staff</h5>
                <h1 class="mb-0">UPT Bahasa Politeknik Negeri Jember</h1>
            </div>
           
            <div class="row g-5">
                @foreach ($teaching_staff as $item)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 500px" src="{{url('img/teacher/'.$item->picture)}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{ $item->google_scholar }}" target="_blank"><i class="fab fa-google fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{ $item->facebook }}" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="{{ $item->instagram }}" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                                {{-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a> --}}
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ $item->fullname }}</h4>
                            <p class="text-uppercase m-0">{{ $item->position }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->
    
@endsection