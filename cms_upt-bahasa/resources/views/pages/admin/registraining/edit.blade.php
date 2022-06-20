@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit Training Registration')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training Registration</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a href="{{ route('registraining') }}">Training Registration</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Edit Training Registration</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('registraining.update', $registraining->id_training_registration) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Data Training Registration</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ $registraining->status }}">
                                                    <option <?php if($registraining['status']=='Not Grade Yet') echo 'selected'?>>Not Grade Yet</option>
                                                    <option <?php if($registraining['status']=='Graded') echo 'selected'?>>Graded</option>
                                                </select>
                                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $registraining->id }}" readonly>
                                                <input type="hidden" class="form-control" id="id_training" name="id_training" value="{{ $registraining->id_training }}" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Note</label>
                                                <textarea class="form-control" name="note" id="note" cols="30" rows="10">{{ $registraining->note }}</textarea>
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('registraining') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Update</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div> 
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection