@extends('layouts.user.user')

@section('titlePage', 'UPT Bahasa | Training Registration')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training Registration</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Training Registration</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <form action="{{ route('regconfirm') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Training Registration</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="class col">
                                        <input type="hidden" class="form-control" id="id" name="id" value="{{ old('id', Auth::user()->id) }}" readonly>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" class="form-control" id="gender" name="gender"  value="{{ old('gender', Auth::user()->gender)}} " readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="status" name="status" value="Not Grade Yet" readonly>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" id="note" name="note" value="Not Yet" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                        <input type="hidden" class="form-control" id="id_training" name="id_training" value="{{ $training->id_training }}" readonly>
                                            <div class="form-group">
                                                <label>Training</label>
                                                <input type="text" class="form-control" id="training" name="training" value="{{ $training->training }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Description Training</label>
                                                <input type="text" class="form-control" id="description_training" name="description_training" value="{{ $training->description_training }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Excercise Date</label>
                                                <input type="text" class="form-control" id="excercise_date" name="excercise_date" value="{{ date('d-m-Y', strtotime($training->excercise_date)) }}" readonly>
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('dashboard') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Confrim</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                                </form>
                            </div>
                    </section>
                </div>
@include('sweetalert::alert')       
@endsection