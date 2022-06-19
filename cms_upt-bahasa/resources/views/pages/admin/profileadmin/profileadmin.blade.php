@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Member')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Profile</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item">
                                    <a>Profile</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            <form action="{{ route('profileadmin.update') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                        <div class="card-header">
                                            <h4>Edit Profile</h4>
                                        </div>
                                        <div class="row ml-2 mr-2 mt-3">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Identity Card</label>
                                                    <input type="number" class="form-control" id="identity_card" name="identity_card" value="{{ $users->identity_card }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="number" class="form-control" id="phone" name="phone" value="{{ $users->phone }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>E-mail Address</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                    <label for="gender">Gender</label><br>
                                                        <input id="gender" type="radio" name="gender" value="M" required autocomplete="gender" <?php if($users['gender']=='M') echo 'checked'?>> Male
                                                        <input id="gender" type="radio" name="gender" value="F" required autocomplete="gender" <?php if($users['gender']=='F') echo 'checked'?>> Female
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Place Of Birth</label>
                                                    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ $users->place_of_birth }}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Date Of Birth</label>
                                                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $users->date_of_birth }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="last_education">Last Education</label>
                                                    <select type="text" class="form-control @error('last_education') is-invalid @enderror" id="last_education" name="last_education" value="{{ $users->last_education }}">
                                                    <option>- Select Your Last Education -</option>
                                                    <option <?php if($users['last_education']=='SMA / SMK') echo 'selected'?>>SMA / SMK</option>
                                                    <option <?php if($users['last_education']=='S1') echo 'selected'?>>S1</option>
                                                    <option <?php if($users['last_education']=='S2') echo 'selected'?>>S2</option>
                                                    <option <?php if($users['last_education']=='S3') echo 'selected'?>>S3</option>
                                                    </select>
                                                    @error('last_education')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label><br>
                                                    <textarea class="form-control" id="address" name="address" cols="30" rows="10">{{ $users->address }}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Pas Photo</label>
                                                    <input type="file" class="form-control" id="pas_photo" name="pas_photo" value="{{ $users->pas_photo }}>">
                                                </div>  
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" value="{{ $users->password }}>">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" value="{{ $users->password }}>">
                                                    </div>
                                                </div>                                          
                                                <div class="card-footer text-right">
                                                    <a
                                                        href="{{ route('member') }}"
                                                        class="btn btn-danger"
                                                    >Cancel
                                                    </a>
                                                    <button class="btn btn-primary mr-1" type="submit">Update</button>
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