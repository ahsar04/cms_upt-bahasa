@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Detail Teaching Staff')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Teaching Staff</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('teacher') }}">Teaching Staff</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Detail Teaching Staff</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('teacher', $teaching_staff->id_teaching_staff) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Detail Data Teaching Staff</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label><b>Picture</b></label>
                                                    <img src="{{url('/img/teacher/'.$teaching_staff->picture)}}" alt="picture" width="150px" class="d-block " onclick="window.open(this.src)">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <table class="table"
                                                id="table-1" style="color: black;">
                                                    <tr>
                                                        <th>Name</th>
                                                        <td>{{ $teaching_staff->fullname }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NIP</th>
                                                        <td>{{ $teaching_staff->nip }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Functional Position</th>
                                                        <td>{{ $teaching_staff->position }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>E-mail Address</th>
                                                        <td>{{ $teaching_staff->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone Number</th>
                                                        <td>{{ $teaching_staff->phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Google Scholar</th>
                                                        <td>{{ $teaching_staff->google_scholar }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Facebook</th>
                                                        <td>{{ $teaching_staff->facebook }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Instagram</th>
                                                        <td>{{ $teaching_staff->instagram }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>{{ $teaching_staff->address }}</td>
                                                    </tr>
                                                </table>
                                                <div class="card-footer text-right">
                                                    <a
                                                        href="{{ route('teacher') }}"
                                                        class="btn btn-success"
                                                    ><i class="fas fa-angle-left"></i> Back</a>
                                                    <a
                                                        href="{{ route('teacher.edit', $teaching_staff->id_teaching_staff) }}"
                                                        class="btn btn-primary"
                                                    ><i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </div>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection