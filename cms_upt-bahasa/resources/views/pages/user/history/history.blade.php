@extends('layouts.user.user')

@section('titlePage', 'UPT Bahasa | History')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1 style="color: black">History</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>History</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>History</h4>
                                        </div>
                                        <div class="row ml-2 mr-2 mt-3 mb-3">
                                            <div class="col">
                                                {{ QrCode::style('round')->generate('Hello, Sobat Polije!') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
@include('sweetalert::alert')                
@endsection