<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('titlePage')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Upt - Bahasa" name="keywords" />
        <meta content="Politeknik Negeri Jember" name="description" />

        @include('includes.landing-page.style')
    </head>

    <body>
        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
        >
            <div class="spinner"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <!-- <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Mastrip 164 Jember</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0813-3564-0139</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>ka.upt.bahasa@polije.ac.id</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div> -->
        <!-- Topbar End -->

        @include('includes.landing-page.navbar')

        @yield('content')


        @include('includes.landing-page.footer')
        <!-- Back to Top -->
        <a
            href="#"
            class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"
            ><i class="bi bi-arrow-up"></i
        ></a>

        @include('includes.landing-page.script')
    </body>
</html>
