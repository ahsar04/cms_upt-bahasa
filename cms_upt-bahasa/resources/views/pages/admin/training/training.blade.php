@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Training')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Training</a>
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
                                            <h4>Training</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('training.add') }}"
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
                                                            <th>Training</th>
                                                            <th>Service Type</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Korean Language Course Opening</td>
                                                            <td>Course</td>
                                                            <td>UPT Bahasa POLIJE opens a special Korean 
                                                                language class online and offline</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('training.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <button
                                                                    class="btn btn-danger"
                                                                    data-confirm="Delete Data Training|Do you want to delete this data?"
                                                                    data-confirm-yes="alert('Deleted');"
                                                                >Delete</button>
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