@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Detail Training Registration')
@section('content')
                @foreach ($registraining as $item)
                    
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
                            <form action="{{ route('registraining.update', $item->id_training_registration) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Detail Data Training Registration</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label><b>Pas Photo</b></label>
                                                    <img src="{{url('/img/users/'.$item->pas_photo)}}" alt="picture" width="150px" class="d-block" onclick="window.open(this.src)">
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <table class="table"
                                                id="table-1" style="color: black;">
                                                    <tr>
                                                        <th>Fullname</th>
                                                        <td>{{ $item->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Email Address</th>
                                                        <td>{{ $item->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone Number</th>
                                                        <td>{{ $item->phone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Gender</th>
                                                        <td><?php if ($item->gender == 'F') {
                                                                        print('Female');
                                                                    } else {
                                                                        print('Male');
                                                                    } ?>
                                                    </tr>
                                                    <tr>
                                                        <th>Last Education</th>
                                                        <td>{{ $item->last_education }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Training</th>
                                                        <td>{{ $item->training }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Description Training</th>
                                                        <td>{{ $item->description_training }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Excercise Date</th>
                                                        <td>{{ date('d-m-Y', strtotime($item->excercise_date) ) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status</th>
                                                        <td>{{ $item->status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Note</th>
                                                        <td>{{ $item->note }}</td>
                                                    </tr>
                                                </table>
                                                <div class="card-footer text-right">
                                                    <a
                                                        href="{{ route('registraining') }}"
                                                        class="btn btn-success"
                                                    ><i class="fas fa-angle-left"></i> Back</a>
                                                    <a
                                                        href="{{ route('registraining.edit', $item->id_training_registration) }}"
                                                        class="btn btn-primary"
                                                    ><i class="fas fa-edit"></i> Edit
                                                    </a>
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
@endforeach
@endsection