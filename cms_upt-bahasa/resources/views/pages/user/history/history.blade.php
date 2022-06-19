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
                                            <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped  table-hover"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Training</th>
                                                            <th>Description Training</th>
                                                            <th>Excercise Date</th>
                                                            <th>Status</th>
                                                            <th>Note</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($training_registration as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->training }}</td>
                                                            <td>{{ $item->description_training }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->excercise_date)) }}</td>
                                                            <td>{{ $item->status }}</td>
                                                            <td>{{ $item->note }}</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-download" style="color:white"></i>
                                                                </a>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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