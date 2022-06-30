@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Detail Member')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Detail Data</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('member') }}">Member</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Detail Member</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('member', $users->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card">
                                            <div class="card-header">
                                                <h4>Detail Data Member</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <label><b>Pas Photo</b></label>
                                                            <img src="{{url('/img/users/'.$users->pas_photo)}}" alt="picture" width="150px" class="d-block">
                                                        </div>
                                                        <div class="form-group">
                                                            <label><b>Indentity Card</b></label>
                                                            <img src="{{url('/img/users/'.$users->identity_card)}}" alt="picture" width="150px" class="d-block">
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <table class="table"
                                                        id="table-1" style="color: black;">
                                                            <tr>
                                                                <th>Name</th>
                                                                <td>{{ $users->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>E-mail Address</th>
                                                                <td>{{ $users->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone Number</th>
                                                                <td>{{ $users->phone }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Gender</th>
                                                                <td><?php if ($users->gender == 'F') {
                                                                    print('Female');
                                                                } else {
                                                                    print('Male');
                                                                } ?>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Place and Date Of Birth</th>
                                                                <td>{{ $users->place_of_birth }}, {{ date('d-m-Y', strtotime($users->date_of_birth)) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Address</th>
                                                                <td>{{ $users->address }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Last Education</th>
                                                                <td>{{ $users->last_education }}</td>
                                                            </tr>
                                                        </table>
                                                        <div class="card-footer text-right">
                                                            <a
                                                                href="{{ route('member') }}"
                                                                class="btn btn-success"
                                                            ><i class="fas fa-angle-left"></i> Back</a>
                                                        </div>     
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