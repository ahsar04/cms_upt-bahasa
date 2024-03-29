@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Teaching Staff')
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
                                    <a>Add Teaching Staff</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Add Data Teaching Staff</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>NIP</label>
                                                <input type="number" class="form-control @error('nip') is-invalid @enderror"
                                                id="nip" name="nip" value="{{ old('nip') }}" >
                                                @error('nip')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                                id="fullname" name="fullname" value="{{ old('fullname') }}" >
                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Functional Position</label>
                                                <input type="text" class="form-control @error('position') is-invalid @enderror"
                                                id="position" name="position" value="{{ old('position') }}" >
                                                @error('position')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                id="phone" name="phone" value="{{ old('phone') }}" >
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}" >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                                id="address" name="address" value="{{ old('address') }}" >
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Google Scholar</label>
                                                <input type="text" class="form-control @error('google_scholar') is-invalid @enderror"
                                                id="google_scholar" name="google_scholar" value="{{ old('google_scholar') }}" >
                                                @error('google_scholar')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                                id="facebook" name="facebook" value="{{ old('facebook') }}" >
                                                @error('facebook')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                                id="instagram" name="instagram" value="{{ old('instagram') }}" >
                                                @error('instagram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Picture (max 1mb)</label>
                                                <input type="file" class="form-control @error('picture') is-invalid @enderror"
                                                id="picture" name="picture" value="{{ old('picture') }}" >
                                                @error('picture')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('teacher') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection