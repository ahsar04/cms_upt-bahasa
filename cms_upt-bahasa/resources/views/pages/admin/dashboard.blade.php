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
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="#">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-primary">
                                <i class="fas fa-user-cog"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Admin</h4>
                                </div>
                                <div class="card-body">
                                {{ $admin }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('teacher') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-info">
                                <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Teacher</h4>
                                </div>
                                <div class="card-body">
                                {{ $teaching_staff }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('member') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-danger">
                                <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Member</h4>
                                </div>
                                <div class="card-body">
                                {{ $users }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('news') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-warning">
                                <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total News</h4>
                                </div>
                                <div class="card-body">
                                {{ $news }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('service') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-success">
                                <i class="fas fa-book-open"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Service</h4>
                                </div>
                                <div class="card-body">
                                {{ $service }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('training') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-dark">
                                <i class="fas fa-book-reader"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Training</h4>
                                </div>
                                <div class="card-body">
                                {{ $training }}
                                </div>
                                </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('procedure') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-secondary">
                                <i class="fas fa-align-justify"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Procedure</h4>
                                </div>
                                <div class="card-body">
                                {{ $procedure }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="color: grey">Calendar</h4>
                            </div>
                            <div class="card-body">
                                <div class="fc-overflow">
                                    <div id="myEvent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
      </div>
@endsection