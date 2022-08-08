@extends('layouts.admin.admin')
@section('titlePage','Dashboard | UPT - Bahasa Polije')
@section('content')

<!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('administrator') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-primary">
                                <i class="fas fa-user-cog"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Admin</h4>
                                </div>
                                <div class="card-body">
                                {{ $admin }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('teacher') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-info">
                                <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Teacher</h4>
                                </div>
                                <div class="card-body">
                                {{ $teaching_staff }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('member') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-danger">
                                <i class="fas fa-users"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Member</h4>
                                </div>
                                <div class="card-body">
                                {{ $users }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('news') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-warning">
                                <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total News</h4>
                                </div>
                                <div class="card-body">
                                {{ $news }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('service') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-success">
                                <i class="fas fa-book-open"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Service</h4>
                                </div>
                                <div class="card-body">
                                {{ $service }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('training') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-dark">
                                <i class="fas fa-book-reader"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Training</h4>
                                </div>
                                <div class="card-body">
                                {{ $training }}
                                </div>
                                </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('procedure') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-secondary">
                                <i class="fas fa-align-justify"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Procedure</h4>
                                </div>
                                <div class="card-body">
                                {{ $procedure }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('registraining') }}">
                            <div class="card card-statistic-2">
                                <div class="card-icon bg-primary">
                                <i class="fas fa-cash-register"></i>
                                </div>
                                <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Register Training</h4>
                                </div>
                                <div class="card-body">
                                {{ $registraining }}
                                </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 style="color: grey">Calendar</h4>
                            </div>
                            <div class="card-body">
                                <div class="fc-overflow">
                                    <div id="myEvent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3>QnA Admin</h3>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                          <h4>Bagaimana cara Edit/Update data Profile?</h4>
                        </div>
                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                          <p class="mb-0">Pergi ke menu Profile, klik nama akun di pojok kanan atas lalu pilih dropdown menu Profile.<br>
                                    Lakukan perubahan sesuai kebutuhan perubahan data,klik button Update untuk menyimpan dan Cancel untuk membatalkan.
                                    </p>
                        </div>
                      </div>
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                          <h4>Bagaimana cara penggunaan action Add,Detail,Edit dan Delete pada menu - menu admin?</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                          <p class="mb-3" style="text-align: justify">
                                            <b>Add</b> <br>
                                            klik button +Add Data (berwarna Hijau). <br>
                                            Isi form sesuai dengan kebutuhan data yang diminta pada field, <br>
                                            kemudian klik save untuk menyimpan dan cancel untuk membatalkan.
                                            Lalu akan muncul notifikasi jika data berhasil disimpan.</p>
                          <p class="mb-3" style="text-align: justify">
                                            <b>Detail</b> <br>
                                            klik button action Detail(icon i ) di samping kanan data yang ingin dilihat.<br>
                                            Kemudian akan tampil detail dari data tersebut, klik button Back untuk Kembali ke halaman sebelumnya.</p>
                          <p class="mb-3" style="text-align: justify">
                                            <b>Delete data</b> <br> 
                                            klik button Delete (berwarna merah) <br>
                                            kemudian akan muncul notifikasi apakah yakin untuk melakukan delete data.<br>
                                            Klik yes jika yakin, kemudian cancel untuk membatalkan.
                          </p>
                          <p class="mb-3" style="text-align: justify">
                                          	<b>Edit data</b> <br>
                                            klik button action Detail(icon i) <br>
                                            di samping kanan data. Lihat detail data yang dipilih.<br>
                                            Kemudian klik button Edit (berwarna biru), Lakukan perubahan sesuai kebutuhan perubahan data,<br>
                                            klik button Update untuk menyimpan dan Cancel untuk membatalkan.
                          </p>
                        </div>
                      </div>
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                          <h4>Bagaimana cara  merubah Status Training dan memberikan Notes pada peserta?</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                          <p class="mb-0">Pilih menu Training Registration<br>
                                          Klik button Edit,silahkan merubah Status atau memberikan Notes pada data Peserta
                                          </p>
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