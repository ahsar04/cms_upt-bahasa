@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | News')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>News</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>News</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <h2 class="section-title">DataTables</h2>
                            <p class="section-lead">
                                We use 'DataTables' made by @SpryMedia. You can
                                check the full documentation
                                <a href="https://datatables.net/">here</a>.
                            </p> -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>News</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('news.add') }}"
                                                class="btn btn-success"
                                            >+ Add Data
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Headline News</th>
                                                            <th>Description</th>
                                                            <th>Picture</th>
                                                            <th>Author</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($news as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->headline_news }}</td>
                                                            <td>{{ $item->description_news }}</td>
                                                            <td>{{ $item->picture }}</td>
                                                            <td>{{ $item->author}}</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    href="{{ route('news.edit', $item->id_news) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-edit"></i>
                                                                </a>
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('news.delete', $item->id_news) }}"
                                                                    class="btn btn-danger"
                                                                ><i class="fas fa-trash"></i>
                                                                </a>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
@include('sweetalert::alert')                
@endsection