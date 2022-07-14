@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Detail Training Registration')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Training Registration</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a href="{{ route('registraining') }}">Training Registration</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Detail Training Registration</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('registraining.update', $registraining->id_training_registration) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Detail Data Training Registration</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <table class="table"
                                            id="table-1" style="color: black;">
                                                <tr>
                                                    <th>Training</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Excercise Date</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Fullname</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Email Address</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>{{ $registraining->status }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Note</th>
                                                    <td>{{ $registraining->note }}</td>
                                                </tr>
                                            </table>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('registraining') }}"
                                                    class="btn btn-success"
                                                ><i class="fas fa-angle-left"></i> Back</a>
                                                <a
                                                    href="{{ route('registraining.edit', $registraining->id_training_registration) }}"
                                                    class="btn btn-primary"
                                                ><i class="fas fa-edit"></i> Edit
                                                </a>
                                            </div> 
                                        </div>
                                        </form>
                                    </div> 
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection