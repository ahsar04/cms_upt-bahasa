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
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <a
                                                href="{{ route('training.add') }}"
                                                class="btn btn-success"
                                            >+ Add Data
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped table-hover"
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
                                                            <td>{!! $item->description_training !!}</td>
                                                            <td>{{ $item->quota }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->opening_date)) }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->excercise_date)) }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->closing_date)) }}</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    href="{{ route('training.edit', $item->id_training) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-edit"></i>
                                                                </a>
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('training.delete', $item->id_training) }}"
                                                                    class="btn btn-danger"
                                                                ><i class="fas fa-trash"></i>
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
                    </section>
                </div>
@include('sweetalert::alert')              
@endsection