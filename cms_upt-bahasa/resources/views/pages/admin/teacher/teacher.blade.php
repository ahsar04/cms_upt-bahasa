@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Teaching Staff')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Teaching Staff</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Teaching Staff</a>
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
                                            <h4>Teaching Staff</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('teacher.add') }}"
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
                                                            <th>NIP</th>
                                                            <th>Fullame</th>
                                                            <th>Functional Position</th>
                                                            <th>Google Scholar</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Address</th>
                                                            <th>Facebook</th>
                                                            <th>Instagram</th>
                                                            <th>Picture</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($teaching_staff as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nip }}</td>
                                                            <td>{{ $item->fullname }}</td>
                                                            <td>{{ $item->position }}</td>
                                                            <td>{{ $item->google_scholar }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>{{ $item->facebook }}</td>
                                                            <td>{{ $item->instagram }}</td>
                                                            <td>{{ $item->picture }}</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    href="{{ route('teacher.edit', $item->id_teacher) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-edit"></i>
                                                                </a>
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('teacher.delete', $item->id_teacher) }}"
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