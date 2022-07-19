@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Training Registration')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training Registration</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Training Registration</a>
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
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped table-hover"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Training</th>
                                                            <th>Excercise Date</th>
                                                            <th>Fullname</th>
                                                            <th>E-mail Address</th>
                                                            <th>Status</th>
                                                            <th>Note</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($registraining as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->training }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($item->excercise_date) ) }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->status }}</td>
                                                            <td>{{ $item->note }}</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    href="{{ route('registraining.detail', $item->id_training_registration) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-newspaper"></i>
                                                                </a>
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('registraining.delete', $item->id_training_registration) }}"
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