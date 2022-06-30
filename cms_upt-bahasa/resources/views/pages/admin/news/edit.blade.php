@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Edit News')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Edit Data</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('news') }}">News</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Edit News</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('news.update', $news->id_news) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Headline News</label>
                                                <input type="text" class="form-control @error('headline_news') is-invalid @enderror" id="headline_news" name="headline_news" value="{{ $news->headline_news }}">
                                                @error('headline_news')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control summernote @error('description_news') is-invalid @enderror" id="description_news" name="description_news" cols="30" rows="10">{{ $news->description_news }}</textarea>
                                                @error('description_news')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Picture</label>
                                                <img src="{{ asset('/img/news/'.$news->picture) }}" width="200px" class="d-block">
                                            </div>
                                            <div class="form-group">
                                                <label>Change Picture</label>
                                                <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" value="{{ $news->picture }}">
                                                @error('picture')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Author</label>
                                                <input type="text" readonly class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ $news->author }}">
                                                @error('author')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('news') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Update</button>
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