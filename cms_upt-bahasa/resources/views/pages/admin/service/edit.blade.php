@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit Service')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Service</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('service') }}">Service</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Edit Service</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('service.update', $service->id_service) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Data Service</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Service Type</label>
                                                <input type="text" class="form-control @error('service_type') is-invalid @enderror" name="service_type" value="{{ $service->service_type }}">
                                                @error('service_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description Service</label>
                                                <textarea class="form-control summernote @error('description_service') is-invalid @enderror" id="" cols="30" rows="10" name="description_service">{{ $service->description_service }}</textarea>
                                                @error('description_service')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('service') }}"
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
                    </section>
                </div>
@endsection