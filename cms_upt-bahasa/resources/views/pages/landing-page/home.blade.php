@extends('layouts.landing-page.index')
@section('titlePage','Home | UPT - Bahasa Polije')
@section('content')
        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div
                            class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px"
                        >
                            <div
                                class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px"
                            >
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Member Test</h5>
                                <h1
                                    class="text-white mb-0"
                                    data-toggle="counter-up"
                                >
                                    12345
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div
                            class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px"
                        >
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px"
                            >
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-primary mb-0">Data Teacher</h5>
                                <h1 class="mb-0" data-toggle="counter-up">
                                    12345
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div
                            class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px"
                        >
                            <div
                                class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px"
                            >
                                <i class="fa fa-award text-primary"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Pass Toefl</h5>
                                <h1
                                    class="text-white mb-0"
                                    data-toggle="counter-up"
                                >
                                    12345
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts Start -->

        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div
                    class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                    style="max-width: 600px"
                >
                    <h5 class="fw-bold text-primary text-uppercase"></h5>
                    <h1 class="mb-0">Announcement</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                        @foreach ($news as $item)
                            <div
                                class="blog-img position-relative overflow-hidden">
                                <img
                                    class="img-fluid"
                                    src="{{url('frontend/img/img_bahasa4.jpg')}}"
                                    alt=""
                                />
                                <a
                                    class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-2 px-4"
                                    href=""
                                    >News</a
                                >
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"
                                        ><i
                                            class="far fa-user text-primary me-2"
                                        ></i
                                        >{{ $item->author }}</small
                                    >
                                    <small
                                        ><i
                                            class="far fa-calendar-alt text-primary me-2"
                                        ></i
                                        >{{ $item->created_at }}</small
                                    >
                                </div>
                                <h4 class="mb-3">{{ $item->headline_news}}</h4>
                                <p>
                                    {{ $item->description_news}}
                                </p>
                                <a class="text-uppercase" href="news.html"
                                    >Read More <i class="bi bi-arrow-right"></i
                                ></a>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Start -->

        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">
                                About Us
                            </h5>
                            <h1 class="mb-0">
                                Deliver Information in the UPT Bahasa POLIJE
                            </h1>
                        </div>
                        <p class="mb-4">
                            UPT Bahasa merupakan sistem informasi berbasis control management system
                            milik Unit Bahasa Politeknik Negeri Jember yang bertujuan untuk membantu
                            memudahkan penyampaian informasi yang ada di UPT Bahasa kepada pengguna.
                            UPT Bahasa merupakan unit pelaksana teknis di bidang pengembangan 
                            pembelajaran dan layanan kebahasaan yang berada di bawah dan bertanggung jawab
                            kepada Direktur dan dikoordinasikan oleh Wakil Direktur Bidang Akademik.
                        </p>
                        <div class="row g-0 mb-3">
                            <div
                                class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.2s"
                            >
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i
                                    >Course
                                </h5>
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i
                                    >EPT
                                </h5>
                            </div>
                            <div
                                class="col-sm-6 wow zoomIn"
                                data-wow-delay="0.4s"
                            >
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i
                                    >Placement Test
                                </h5>
                                <h5 class="mb-3">
                                    <i class="fa fa-check text-primary me-3"></i
                                    >Toefl Test
                                </h5>
                            </div>
                        </div>
                        <!-- <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div> -->
                        <!-- <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a> -->
                    </div>
                    <div class="col-lg-5" style="min-height: 500px">
                        <div class="position-relative h-100">
                            <img
                                class="position-absolute w-100 h-100 rounded wow zoomIn"
                                data-wow-delay="0.9s"
                                src="{{url('frontend/img/about.jpg')}}"
                                style="object-fit: cover"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        

       
@endsection