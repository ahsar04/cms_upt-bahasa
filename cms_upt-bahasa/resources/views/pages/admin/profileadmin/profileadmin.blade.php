@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Profile')
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
                        <form action="{{ route('profileadmin.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4>Edit Data Profile</h4>
                                        </div>
                                        <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Pas Photo</label>
                                                    <img src="{{ asset('/img/users/'.Auth::user()->pas_photo) }}" width="200px" class="d-block">
                                                </div>
                                                <div class="form-group">
                                                    <label>Change Pas Photo</label>
                                                    <input type="file" class="form-control @error('pas_photo') is-invalid @enderror" id="pas_photo" name="pas_photo" value="{{ old('pas_photo', Auth::user()->pas_photo )}}">
                                                    @error('pas_photo')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Identity Card</label>
                                                    <img src="{{ asset('/img/users/'.Auth::user()->identity_card) }}" width="200px" class="d-block">
                                                </div>
                                                <div class="form-group">
                                                    <label>Change Identity Card</label>
                                                    <input type="file" class="form-control @error('identity_card') is-invalid @enderror" id="identity_card" name="identity_card" value="{{ old('identity_card', Auth::user()->identity_card )}}">
                                                    @error('identity_card')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', Auth::user()->name) }}">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Place of Birth</label>
                                                    <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth', Auth::user()->place_of_birth) }}">
                                                    @error('place_of_birth')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', Auth::user()->date_of_birth) }}">
                                                    @error('date_of_birth')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Education</label>
                                                    <input type="text" class="form-control @error('last_education') is-invalid @enderror" id="last_education" name="last_education" value="{{ old('last_education', Auth::user()->last_education) }}">
                                                    @error('last_education')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" cols="30" rows="10">{{ old('address', Auth::user()->address) }}</textarea>
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
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