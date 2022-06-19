@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add News')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>News</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('news') }}">News</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Add News</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Add Data News</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Headline News</label>
                                                <input type="text" class="form-control"
                                                id="headline_news" name="headline_news">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control"
                                                id="description_news" name="description_news" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Picture</label>
                                                <input type="file" class="form-control"
                                                id="picture" name="picture">
                                            </div>
                                            <div class="form-group">
                                                <label>Author</label>
                                                <input type="text" class="form-control"
                                                id="author" name="author" value="{{Auth::user()->name}}" readonly>
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('news') }}"
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