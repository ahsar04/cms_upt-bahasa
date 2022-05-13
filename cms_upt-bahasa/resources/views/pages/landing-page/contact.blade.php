@extends('layouts.landing-page.index')
@section('titlePage','Contact | UPT - Bahasa Polije')
@section('content')

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div
                    class="section-title text-center position-relative pb-3 mb-5 mx-auto"
                    style="max-width: 600px"
                >
                    <h5 class="fw-bold text-primary text-uppercase">
                        Contact Us
                    </h5>
                    <h1 class="mb-0">UPT Bahasa Politeknik Negeri Jember</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-lg-4">
                        <div
                            class="d-flex align-items-center wow fadeIn"
                            data-wow-delay="0.1s"
                        >
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px"
                            >
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h6 class="mb-2">Call to ask any question</h6>
                                <h6 class="text-primary mb-0">
                                    0813-3564-0139
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="d-flex align-items-center wow fadeIn"
                            data-wow-delay="0.4s"
                        >
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px"
                            >
                            <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h6 class="mb-2">Email to get free quote</h6>
                                <h6 class="text-primary mb-0">
                                    ka.upt.bahasa@polije.ac.id
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div
                            class="d-flex align-items-center wow fadeIn"
                            data-wow-delay="0.8s"
                        >
                            <div
                                class="bg-primary d-flex align-items-center justify-content-center rounded"
                                style="width: 60px; height: 60px"
                            >
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h6 class="mb-2">Visit our office</h6>
                                <h6 class="text-primary mb-0">
                                    Jl. Mastrip 164 Jember
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light px-4"
                                        placeholder="Your Name"
                                        style="height: 55px"
                                    />
                                </div>
                                <div class="col-md-6">
                                    <input
                                        type="email"
                                        class="form-control border-0 bg-light px-4"
                                        placeholder="Your Email"
                                        style="height: 55px"
                                    />
                                </div>
                                <div class="col-12">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light px-4"
                                        placeholder="Subject"
                                        style="height: 55px"
                                    />
                                </div>
                                <div class="col-12">
                                    <textarea
                                        class="form-control border-0 bg-light px-4 py-3"
                                        rows="4"
                                        placeholder="Message"
                                    ></textarea>
                                </div>
                                <div class="col-12">
                                    <button
                                        class="btn btn-primary w-100 py-3"
                                        type="submit"
                                    >
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                        <iframe
                            class="position-relative rounded w-100 h-100"
                            src="{{url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4235048790615!2d113.72099831478059!3d-8.160015494126544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sState%20Polytechnic%20of%20Jember!5e0!3m2!1sen!2sid!4v1650773730324!5m2!1sen!2sid')}}"
                            frameborder="0"
                            style="min-height: 350px; border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    
    
@endsection