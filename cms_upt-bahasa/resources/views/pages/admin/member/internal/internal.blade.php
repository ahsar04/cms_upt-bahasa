@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Member Internal')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Member Internal</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Member Internal</a>
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
                                            <h4>Member Internal</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('internal.add') }}"
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
                                                            <th>NIM</th>
                                                            <th>Fullame</th>
                                                            <th>Departmen</th>
                                                            <th>Study Program</th>
                                                            <th>Year of Entry</th>
                                                            <th>Display Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>E41201354</td>
                                                            <td>Salsabila Purnami</td>
                                                            <td>Teknologi Informasi</td>
                                                            <td>Teknik Informatika</td>
                                                            <td>2020</td>
                                                            <td>Avatar.jpg</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('internal.add') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-danger"
                                                                >Delete
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>E41201730</td>
                                                            <td>Kei Takebuci</td>
                                                            <td>Kesehatan</td>
                                                            <td>Gizi Klinik</td>
                                                            <td>2019</td>
                                                            <td>images2.jpg</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('internal.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-danger"
                                                                >Delete
                                                                </a>
                                                            </td>
                                                        </tr>
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
@endsection