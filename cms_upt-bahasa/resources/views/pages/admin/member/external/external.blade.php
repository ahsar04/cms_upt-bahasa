@@ -0,0 +1,118 @@
@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Member External')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Member External</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Member External</a>
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
                                            <h4>Member External</h4>
                                        </div>
                                        <div class="card-body">
                                            <a
                                                href="{{ route('external.add') }}"
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
                                                            <th>NIK</th>
                                                            <th>Fullname</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>University</th>
                                                            <th>Study Program</th>
                                                            <th>Year of Entry</th>
                                                            <th>Display Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.</td>
                                                            <td>E41201256</td>
                                                            <td>Ariana Kumalasari</td>
                                                            <td>ariana@gmail.com</td>
                                                            <td>085335712782</td>
                                                            <td>Universitas Jember</td>
                                                            <td>Informatika</td>
                                                            <td>2018</td>
                                                            <td>Avatar.jpg</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('external.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <button
                                                                    class="btn btn-danger"
                                                                    data-confirm="Delete Data Member External|Do you want to delete this data?"
                                                                    data-confirm-yes="alert('Deleted');"
                                                                >Delete</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2.</td>
                                                            <td>E41201390</td>
                                                            <td>Karin Angraeni</td>
                                                            <td>karinang@gmail.com</td>
                                                            <td>082126870024</td>
                                                            <td>Universitas Muhammadhiyah Jember</td>
                                                            <td>Manajemen</td>
                                                            <td>2020</td>
                                                            <td>images2.jpg</td>
                                                            <td>
                                                                <a
                                                                    href="{{ route('external.edit') }}"
                                                                    class="btn btn-primary"
                                                                >Edit
                                                                </a>
                                                                <button
                                                                    class="btn btn-danger"
                                                                    data-confirm="Delete Data Member External|Do you want to delete this data?"
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