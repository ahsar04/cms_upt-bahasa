@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Procedure')
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
                                    <a>Add Procedure</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('procedure.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Add Data Procedure</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Headline Procedure</label>
                                                <input type="text" class="form-control @error('headline_procedure') is-invalid @enderror"
                                                id="exampleInputHeadlineProcedure" name="headline_procedure" value="{{old('headline_procedure')}}">
                                                @error('headline_procedure') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description Procedure</label>
                                                <textarea class="form-control summernote @error('description_procedure') is-invalid @enderror"
                                                id="exampleInputDescriptionProcedure" name="description_procedure" value="{{old('description_procedure')}}" cols="30" rows="10"></textarea>
                                                @error('description_procedure') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Link Procedure</label>
                                                <input type="text" class="form-control @error('link_procedure') is-invalid @enderror"
                                                id="exampleInputLinkProcedure" name="link_procedure" value="{{old('link_procedure')}}">
                                                @error('link_procedure') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('procedure') }}"
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
                        </div>
                    </section>
                </div>
@endsection