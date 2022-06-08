@extends('layouts.admin.admin')
@section('titlePage','Dashboard | UPT - Bahasa POLIJE')
@section('content')

<!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
                <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="#" style="text-decoration:none">
                    <div class="card card-statistic-2">
                        <div class="row">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h3 style="color: grey">Admin</h3>
                                </div>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h5 style="font-size: 15px; color: grey">Total Of Admin</h5>
                                    <h5 style="color: grey">{{ $news }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('teacher') }}">
                        <div class="card card-statistic-2">
                            <div class="row">
                                <div class="card-icon bg-info">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h3 style="color: grey">Teacher</h3>
                                    </div>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h5 style="font-size: 15px; color: grey">Total Of Teacher</h5>
                                        <h5 style="color: grey">{{ $teaching_staff }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="#">
                        <div class="card card-statistic-2">
                            <div class="row">
                                <div class="card-icon bg-danger">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h3 style="color: grey">Member</h3>
                                    </div>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h5 style="font-size: 15px; color: grey">Total Of Member</h5>
                                        <h5 style="color: grey">{{ $service }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('news') }}">
                        <div class="card card-statistic-2">
                            <div class="row">
                                <div class="card-icon bg-warning">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h3 style="color: grey">News</h3>
                                    </div>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h5 style="font-size: 15px; color: grey">Total Of News</h5>
                                        <h5 style="color: grey">{{ $news }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('service') }}">
                        <div class="card card-statistic-2">
                            <div class="row">
                                <div class="card-icon bg-success">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h3 style="color: grey">Service</h3>
                                    </div>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h5 style="font-size: 15px; color: grey">Total Of Service</h5>
                                        <h5 style="color: grey">{{ $service }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('training') }}">
                        <div class="card card-statistic-2">
                            <div class="row">
                                <div class="card-icon bg-dark">
                                    <i class="fas fa-book-reader"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h3 style="color: grey">Training</h3>
                                    </div>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h5 style="font-size: 15px; color: grey">Total Of Training</h5>
                                        <h5 style="color: grey">{{ $training }}</h5>
                                    </div>
                                </div>
                            </div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <a href="{{ route('procedure') }}">
                        <div class="card card-statistic-2">
                            <div class="row">
                                <div class="card-icon bg-secondary">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h3 style="color: grey">Procedure</h3>
                                    </div>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h5 style="font-size: 15px; color: grey">Total Of Procedure</h5>
                                        <h5 style="color: grey">{{ $procedure }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
      </div>
@endsection