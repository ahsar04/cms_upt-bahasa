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
                            
                            <form action="{{ route('training.store') }}" method="post">
                            {{ csrf_field() }}
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
                                            <input type="text" class="form-control @error('training') is-invalid @enderror"
                                            id="exampleInputTraining" name="training" value="{{old('training')}}">
                                            @error('training') 
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span> 
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Service Type</label>
                                            <select type="text" class="form-control @error('service_type') is-invalid @enderror"
                                            id="exampleInputServiceType" name="service_type" value="{{old('service_type')}}">
                                            @error('service_type') 
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span> 
                                            @enderror
                                                @foreach ($service as $service)
                                                <option value="{{$service->service_type}}" >{{$service->service_type}}</option>
                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Description Training</label>
                                            <textarea class="form-control @error('description_training') is-invalid @enderror"
                                            id="exampleInputDescriptionTraining" name="description_training" value="{{old('description_training')}}" cols="30" rows="10"></textarea>
                                            @error('description_training') 
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span> 
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                                <label>Quota</label>
                                                <input type="text" class="form-control @error('quota') is-invalid @enderror"
                                                id="exampleInputQuota" name="quota" value="{{old('quota')}}">
                                                @error('quota') 
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span> 
                                                @enderror
                                            </div>
                                    </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Opening Date</label>
                                                <input type="date" class="form-control datetimepicker"
                                                class="form-control @error('opening_date') is-invalid @enderror"
                                                id="exampleInputOpeningDate" name="opening_date" value="{{old('opening_date')}}">
                                                @error('opening_date') 
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span> 
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Excercise Date</label>
                                                <input type="date" class="form-control datetimepicker"
                                                class="form-control @error('excercise_date') is-invalid @enderror"
                                                id="exampleInputExcerciseDate" name="excercise_date" value="{{old('excercise_date')}}">
                                                @error('excercise_date') 
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span> 
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Closing Date</label>
                                                <input type="date" class="form-control datetimepicker"
                                                class="form-control @error('closing_date') is-invalid @enderror"
                                                id="exampleInputClosingDate" name="closing_date" value="{{old('closing_date')}}">
                                                @error('closing_date') 
                                                    <span class="text-danger">{{$message}}</span> 
                                                @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('training') }}"
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
                            </form>
                        </div>
                    </section>
                </div>
@endsection