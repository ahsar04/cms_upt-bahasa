@extends('layouts.admin.admin')

@section('titlePage', 'UPT Bahasa | Add Member Internal')
@section('content')
                    <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                            <h1>Member Internal</h1>
                            <div class="section-header-breadcrumb">
                                <div class="breadcrumb-item active">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a href="{{ route('teacher') }}">Member Internal</a>
                                </div>
                                <div class="breadcrumb-item">
                                    <a>Add Member Internal</a>
                                </div>
                                <!-- <div class="breadcrumb-item">DataTables</div> -->
                            </div>
                        </div>

                        <div class="section-body">
                            <!-- <p class="section-lead">
                                Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
                            </p> -->
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-header">
                                        <h4>Add Data Member Internal</h4>
                                    </div>
                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fullname</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <select class="form-control select2">
                                                    <option>Produksi Pertanian</option>
                                                    <option>Teknologi Pertanian</option>
                                                    <option>Peternakan</option>
                                                    <option>Manajemen Agribisnis</option>
                                                    <option>Teknologi Informasi</option>
                                                    <option>Bahasa, Komunikasi dan Pariwisata</option>
                                                    <option>Kesehatan</option>
                                                    <option>Teknik</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Study Program</label>
                                                <select class="form-control select2">
                                                    <option>Produksi Tanaman Holtikultura</option>
                                                    <option>Produksi Tanaman Perkebunan</option>
                                                    <option>Teknik Produksi Benih</option>
                                                    <option>Teknologi Produksi Tanaman Pangan</option>
                                                    <option>Budidaya Tanaman Perkebunan</option>
                                                    <option>Pengelolaan Perkebunan Kopi</option>
                                                    <option>Keteknikan Pertanian</option>
                                                    <option>Teknologi Industri Pangan</option>
                                                    <option>Teknologi Rekayasa Pangan</option>
                                                    <option>Produksi Ternak</option>
                                                    <option>Manajemen Bisnis Unggas</option>
                                                    <option>Manajemen Agribisnis</option>
                                                    <option>Manajemen Agroindustri</option>
                                                    <option>Akuntansi sektor Publik</option>
                                                    <option>Manajemen Informatika</option>
                                                    <option>Teknik Komputer</option>
                                                    <option>Teknologi Informatika</option>
                                                    <option>Bahasa Inggris</option>
                                                    <option>Rekam Medik</option>
                                                    <option>Gizi Klinik</option>
                                                    <option>Teknik Energi Terbarukan</option>
                                                    <option>Mesin Otomotif</option>
                                                    <option>Teknologi Rekayasa Metkatronika</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Year of Entry</label>
                                            <select class="form-control select2">
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Display Image</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="card-footer text-right">
                                                <a
                                                    href="{{ route('internal') }}"
                                                    class="btn btn-danger"
                                                >Cancel
                                                </a>
                                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                            </div>
                    </section>
                </div>
@endsection