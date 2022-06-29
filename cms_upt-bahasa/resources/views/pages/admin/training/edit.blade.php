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
                                                <input type="text" name="training" class="form-control @error('training') is-invalid @enderror" value="{{ $training->training }}">
                                                @error('training')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Service Type</label>
                                                <select class="form-control @error('service_type') is-invalid @enderror" id="service_type" name="service_type"  required>
                                                    @foreach ($service as $service)
                                                    <option @if($training['service_type']==$service->service_type) selected @endif>{{$service->service_type}}</option>
                                                    @endforeach
                                                </select>
                                                @error('service_type')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control @error('description_training') is-invalid @enderror" name="description_training" id="" cols="30" rows="10">{{ $training->description_training }}</textarea>
                                                @error('description_training')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Quota</label>
                                                <input type="text" name="quota" class="form-control @error('quota') is-invalid @enderror" value="{{ $training->quota }}">
                                                @error('quota')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Opening Date</label>
                                                <input type="date" name="opening_date" class="form-control datetimepicker @error('opening_date') is-invalid @enderror" value="{{ $training->opening_date }}">
                                                @error('opening_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Excercise Date</label>
                                                <input type="date" name="excercise_date" class="form-control datetimepicker @error('excercise_date') is-invalid @enderror" value="{{ $training->excercise_date }}">
                                                @error('excercise_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Closing Date</label>
                                                <input type="date" name="closing_date" class="form-control datetimepicker @error('closing_date') is-invalid @enderror" value="{{ $training->closing_date }}">
                                                @error('closing_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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