@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit Training')
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
                                    <a>Edit Training</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('training.update', $training->id_training) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Data Training</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Training</label>
                                                <input type="text" name="training" class="form-control" value="{{ $training->training }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Service Type</label>
                                                <select class="form-control @error('service_type') is-invalid @enderror" id="service_type" name="service_type" value="{{ $training->service_type }}">
                                                    <option>- Select Service Type -</option>
                                                    <option <?php if($training['service_type']=='Course') echo 'selected'?>>Course</option>
                                                    <option <?php if($training['service_type']=='EPT (English Proficiency Test)') echo 'selected'?>>EPT (English Proficiency Test)</option>
                                                    <option <?php if($training['service_type']=='Placement Test') echo 'selected'?>>Placement Test</option>
                                                </select>
                                                @error('service_type')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description_training" id="" cols="30" rows="10">{{ $training->description_training }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Quota</label>
                                                <input type="text" name="quota" class="form-control" value="{{ $training->quota }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Opening Date</label>
                                                <input type="date" name="opening_date" class="form-control datetimepicker" value="{{ $training->opening_date }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Excercise Date</label>
                                                <input type="date" name="excercise_date" class="form-control datetimepicker" value="{{ $training->excercise_date }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Closing Date</label>
                                                <input type="date" name="closing_date" class="form-control datetimepicker" value="{{ $training->closing_date }}">
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('training') }}"
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
                            </form>
                        </div>
                    </section>
                </div>
@endsection