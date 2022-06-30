@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Member')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Member</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a>Member</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <a
                                                href="{{--route('member.add')--}}"
                                                class="btn btn-success"
                                            >+ Add Data
                                            </a> -->
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped table-hover"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Identity Card</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Gender</th>
                                                            <th>Birth</th>
                                                            <th>Last Education</th>
                                                            <th>Address</th>
                                                            <th>Pas Photo</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($users as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->identity_card }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->gender }}</td>
                                                            <td>{{ $item->place_of_birth }}, {{ $item->date_of_birth }}</td>
                                                            <td>{{ $item->last_education }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td><img src="{{url('/img/users/'.$item->pas_photo)}}" alt="picture" width="100px" height="100px"></td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('member.delete', $item->id) }}"
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