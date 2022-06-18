
        <!-- Navbar & Carousel Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <div class="m-0 row">
                        <div class="col-md-2" style="margin-right: 10px">
                            <img
                                class="w-1"
                                style="width: 50px; height: auto"
                                src="{{url('frontend/img/logo_polije.png')}}"
                                alt="Image Logo_UPT"
                            />
                        </div>
                        <div class="col-md-3" style="margin-top: 5px">
                            <h4 class="m-0">
                                UPT - Bahasa <br />
                                Politeknik Negeri Jember
                            </h4>
                        </div>
                    </div>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                >
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('landingpage') }}" class="nav-item nav-link active"
                            >Home</a
                        >
                        <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown"
                                >Profile</a
                            >
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('visimisi') }}" class="dropdown-item"
                                    >Visi Misi</a
                                >
                                <a
                                    href="{{ route('teachingstaff') }}"
                                    class="dropdown-item"
                                    >Teaching Staff</a
                                >
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown"
                                >Services</a
                            >
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('ept')}}" class="dropdown-item"
                                    >English Proficiency Test</a>
                                <a
                                    href="{{ route('placement-test') }}"
                                    class="dropdown-item"
                                    >Placement Test</a>
                                <a
                                    href="{{ route('course')}}"
                                    class="dropdown-item"
                                    >Course</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a
                                href="#"
                                class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown"
                                >Procedure</a
                            >
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('new-account')}}" class="dropdown-item"
                                    >Procedure to Make Account </a
                                >
                                <a href="{{ route('test_skema')}}" class="dropdown-item"
                                    >Procedure Test Skema</a
                                >
                                <a href="{{ route('test-result')}}" class="dropdown-item"
                                    >Procedure to See Result Test</a
                                >
                                <a href="{{ route('certificate')}}" class="dropdown-item"
                                    >Procedure to Take Certificate</a
                                >
                            </div>
                        </div>
                        <a href="{{ route('contact')}}" class="nav-item nav-link"
                            >Contact</a
                        >
                    </div>
                    <a href="{{ route( 'login')}}" class="btn btn-primary py-2 px-4 ms-3"
                        >Sign In</a
                    >
                </div>
            </nav>

            <div
                id="header-carousel"
                class="carousel slide carousel-fade"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            class="w-100 h-50"
                            src="{{url('frontend/img/img_bahasa1.jpg')}}"
                            alt="Image"
                        />
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                        >
                            <div class="p-3" style="max-width: 900px">
                                <h5
                                    class="text-white text-uppercase mb-3 animated slideInDown"
                                >
                                    Welcome to
                                </h5>
                                <h1
                                    class="display-1 text-white mb-md-4 animated zoomIn"
                                >
                                    UPT Bahasa POLIJE
                                </h1>
                                <!-- <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a> -->
                                <a
                                    href=""
                                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInCenter"
                                    >Read More</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            class="w-100 h-50"
                            src="{{url('frontend/img/img_bahasa2.jpg')}}"
                            alt="Image"
                        />
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                        >
                            <div class="p-3" style="max-width: 900px">
                                <h5
                                    class="text-white text-uppercase mb-3 animated slideInDown"
                                >
                                    Profile
                                </h5>
                                <h1
                                    class="display-1 text-white mb-md-4 animated zoomIn"
                                >
                                    Who We Are
                                </h1>
                                <a
                                    href="{{ route('visimisi') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInCenter"
                                    >Visi Misi</a
                                >
                                <a
                                    href="{{route('teachingstaff')}}"
                                    class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"
                                    >Teaching Staff</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            class="w-100"
                            src="{{url('frontend/img/img_bahasa3.jpg')}}"
                            alt="Image"
                        />
                        <div
                            class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                        >
                            <div class="p-3" style="max-width: 900px">
                                <h5
                                    class="text-white text-uppercase mb-3 animated slideInDown"
                                >
                                    Hello
                                </h5>
                                <h1
                                    class="display-1 text-white mb-md-4 animated zoomIn"
                                >
                                    Read News
                                </h1>
                                <a
                                    href="{{ route('home')}}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInCenter"
                                    >Read More</a
                                >
                                <!-- <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#header-carousel"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#header-carousel"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Navbar & Carousel End -->