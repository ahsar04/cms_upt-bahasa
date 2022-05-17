@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Schedule')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Schedule</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Schedule</a>
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
                                            <h4>Schedule</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('schedule.add') }}"
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
                                                            <th>Headline Schedule</th>
                                                            <th>Description</th>
                                                            <th>Opening Date</th>
                                                            <th>Deadline</th>
                                                            <th>Picture</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>Korean Language Course Opening</td>
                                                            <td>UPT Bahasa POLIJE opens a special Korean language class online and offline</td>
                                                            <td>2022-04-30</td>
                                                            <td>2022-05-30</td>
                                                            <td>course.jpg</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    href="{{ route('schedule.edit', $item->id_schedule) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-edit"></i>
                                                                </a>
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('schedule.delete', $item->id_schedule) }}"
                                                                    class="btn btn-danger"
                                                                ><i class="fas fa-trash"></i>
                                                                </a>
                                                            </div>
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