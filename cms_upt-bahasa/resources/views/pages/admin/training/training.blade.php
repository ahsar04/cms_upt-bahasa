@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Training')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Training</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <h2 class="section-title">DataTables</h2>
                            <p class="section-lead">
                                We use 'DataTables' made by @SpryMedia. You can
                                check the full documentation
                                <a href="https://datatables.net/">here</a>.
                            </p> -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Training</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('training.add') }}"
                                                class="btn btn-success"
                                            >+ Add Data
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Training</th>
                                                            <th>Service Type</th>
                                                            <th>Description</th>
                                                            <th>Quota</th>
                                                            <th>Opening Date</th>
                                                            <th>Excercise Date</th>
                                                            <th>Closing Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($training as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->training }}</td>
                                                            <td>{{ $item->service_type }}</td>
                                                            <td>{{ $item->description_training }}</td>
                                                            <td>{{ $item->quota }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->opening_date)) }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->excercise_date)) }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->closing_date)) }}</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('training.edit', $item->id_training) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-edit"></i>
                                                                </a>
                                                                <a 
                                                                    class="btn btn-danger"
                                                                    onclick="return confirm('Are you sure?');"
                                                                    href="{{ route('training.delete', $item->id_training) }}"
                                                                ><i class="fas fa-trash"></i>
                                                                </a>       
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
                    </section>
                </div>
@include('sweetalert::alert')              
@endsection