@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Member')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Profile</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Profile</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('profileadmin.update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-primary">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4>Edit Data Profile</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label>Pas Photo</label>
                                                                <img src="{{ asset('/img/user/profile/'.Auth::user()->pas_photo) }}" width="200px" class="d-block">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Change Pas Photo</label>
                                                                <input type="file" class="form-control" id="pas_photo" name="pas_photo" value="{{ old('pas_photo', Auth::user()->pas_photo )}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Indentity Card</label>
                                                                <img src="{{ asset('/img/user/profile/'.Auth::user()->pas_photo) }}" width="200px" class="d-block">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Change Indentity Card</label>
                                                                <input type="file" class="form-control" id="pas_photo" name="pas_photo" value="{{ old('pas_photo', Auth::user()->pas_photo )}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                                <div class="form-group">
                                                                    <label>Name</label>
                                                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Place of Birth</label>
                                                                    <textarea class="form-control" id="place_of_birth" name="place_of_birth" cols="30" rows="10">{{ old('place_of_birth', Auth::user()->place_of_birth) }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Date of Birth</label>
                                                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', Auth::user()->date_of_birth) }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Last Education</label>
                                                                    <input type="text" class="form-control" id="last_education" name="last_education" value="{{ old('last_education', Auth::user()->last_education) }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Phone</label>
                                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', Auth::user()->address) }}">
                                                                </div>
                                                                <div class="card-footer text-right">
                                                                    <a
                                                                        href="{{ route('dashboard') }}"
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
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
@endsection