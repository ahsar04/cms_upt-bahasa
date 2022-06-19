@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit Procedure')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Procedure</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('procedure') }}">Procedure</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Edit Procedure</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('procedure.update', $procedure->id_procedure) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Edit Data Procedure</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Headline Procedure</label>
                                                <input type="text" class="form-control" name="headline_procedure" value="{{ $procedure->headline_procedure }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Description Procedure</label>
                                                <textarea class="form-control summernote" id="" cols="30" rows="10" name="description_procedure">{{ $procedure->description_procedure }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Link Procedure</label>
                                                <input type="text" class="form-control" name="link_procedure" value="{{ $procedure->link_procedure }}">
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('procedure') }}"
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