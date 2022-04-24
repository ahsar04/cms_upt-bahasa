@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Service')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Service</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Service</a>
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
                                            <h4>Service</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('service.add') }}"
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
                                                            <th>Service Type</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Course</td>
                                                            <td>At the UPT Bahasa POLIJE, there are several courses, 
                                                                including English courses</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('service.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <button
                                                                    class="btn btn-danger"
                                                                    data-confirm="Delete Data Service|Do you want to delete this data?"
                                                                    data-confirm-yes="alert('Deleted');"
                                                                >Delete</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>EPT (English Proficiency Test)</td>
                                                            <td>A comprehensive test that measures all aspects 
                                                                of English language proficiency especially for academic purposes.</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('service.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <button
                                                                    class="btn btn-danger"
                                                                    data-confirm="Delete Data Service|Do you want to delete this data?"
                                                                    data-confirm-yes="alert('Deleted');"
                                                                >Delete</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3.</td>
                                                            <td>Placement Test</td>
                                                            <td>A Placement Test is an exam that will be given to students who will enter 
                                                                an institution in order to determine the level of skill in a 
                                                                particular field, so that groups can be obtained according to students' abilities.</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('service.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <button
                                                                    class="btn btn-danger"
                                                                    data-confirm="Delete Data Service|Do you want to delete this data?"
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