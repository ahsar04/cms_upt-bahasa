@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Training')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('training') }}">Training</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Add Training</a>
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
                                        <h4>Add Data Training</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Training</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Service Type</label>
                                                <select class="form-control">
                                                    <option>- Select Service Type -</option>
                                                    <option>Course</option>
                                                    <option>EPT (English Proficiency Test)</option>
                                                    <option>Placement Test</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('training') }}"
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
                        </div>
                    </section>
                </div>
@endsection