@extends('layouts.user.user')
@section('titlePage', 'UPT Bahasa | QR Code')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1 style="color: black">QR Code Registration</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>QR Code Registration</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>QR Code Registration</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-striped  table-hover"
                                                    id="table-1">
                                                    <thead>
                                                        <tr>
                                                            <th>Note</th>
                                                            <th>Your Registration QR Code</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($training_registration as $item)
                                                        <tr>
                                                            <td>Capture and Save your Registration QR Code</td>
                                                            <td>
                                                            {!!QrCode::size(150)->generate($item->id_training_registration)!!}
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