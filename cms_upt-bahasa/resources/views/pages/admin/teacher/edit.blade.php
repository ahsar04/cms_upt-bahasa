@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit Teaching Staff')
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
                                    <a>Edit Teaching Staff</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('teacher.update', $teaching_staff->id_teaching_staff) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Data Teaching Staff</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>NIP</label>
                                                <input type="number" class="form-control" id="nip" name="nip" value="{{ $teaching_staff->nip }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $teaching_staff->fullname }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Functional Position</label>
                                                <input type="text" class="form-control" id="position" name="position" value="{{ $teaching_staff->position }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Google Scholar</label>
                                                <input type="text" class="form-control" id="google_scholar" name="google_scholar" value="{{ $teaching_staff->google_scholar }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" id="phone" name="phone" value="{{ $teaching_staff->phone }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $teaching_staff->email }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" id="address" name="address" value="{{ $teaching_staff->address }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $teaching_staff->facebook }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $teaching_staff->instagram }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Picture</label>
                                                <img src="{{ asset('/img/teacher/'.$teaching_staff->picture) }}" width="200px" class="d-block">
                                            </div>
                                            <div class="form-group">
                                                <label>Change Picture</label>
                                                <input type="file" class="form-control" id="picture" name="picture" value="{{ $teaching_staff->picture }}">
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('teacher') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection