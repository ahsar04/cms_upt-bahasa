+@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit Member External')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Member External</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a href="{{ route('teacher') }}">Teaching Staff</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a href="{{ route('external') }}">Member External</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Edit Member External</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Data Member External</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>University</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Study Program</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Year of Entry</label>
                                                <input type="number" class="form-control">
                                            </div>                                            
                                            <div class="form-group">
                                                <label>Display Image</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('external') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection