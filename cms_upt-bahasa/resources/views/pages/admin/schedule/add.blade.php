@@ -0,0 +1,75 @@
@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Schedule')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Schedule</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a href="{{ route('schedule') }}">Schedule</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Add Schedule</a>
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
                                        <h4>Add Data Schedule</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>No</label>
                                                <input type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Headline Schedule</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" id="" cols="15" rows="15"></textarea>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Opening Date</label>
                                                <input type="date" class="form-control datetimepicker">
                                            </div>
                                            <div class="form-group">
                                                <label>Deadline</label>
                                                <input type="date" class="form-control datetimepicker">
                                            </div>
                                            <div class="form-group">
                                                <label>Pictures</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('schedule') }}"
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