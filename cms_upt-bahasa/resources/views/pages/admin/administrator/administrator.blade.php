@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Admin')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Admin</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a>Admin</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped table-hover"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Pas Photo</th>
                                                            <th>Name</th>
                                                            <th>Gender</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Place and Date Of Birth</th>
                                                            <th>Address</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($admin as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><img src="{{url('/img/users/'.$item->pas_photo)}}" alt="picture" width="100px"></td>
                                                            <td>{{ $item->name }}</td>
                                                            <td><?php if ($item->gender == 'F') {
                                                                    print('Female');
                                                                } else {
                                                                    print('Male');
                                                                } ?>
                                                            </td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>{{ $item->place_of_birth }}, {{ date('d-m-Y', strtotime($item->date_of_birth)) }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a
                                                                    href="{{ route('administrator.detail', $item->id) }}"
                                                                    class="btn btn-primary"
                                                                ><i class="fas fa-newspaper"></i>
                                                                </a>
                                                                <a
                                                                    onclick="return confirm('Are you sure?')"
                                                                    href="{{ route('administrator.delete', $item->id) }}"
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