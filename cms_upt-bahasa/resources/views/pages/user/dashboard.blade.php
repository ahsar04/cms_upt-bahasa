@extends('layouts.user.user')
@section('titlePage','Dashboard | UPT - Bahasa POLIJE')
@section('content')
                    <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            <div class="section-header">
            <h1>Dashboard</h1>
            </div>
            <div class="col-md-3">
            </div>
            <div class="row">
                @foreach ($training as $item)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>{{ $item->training }}</h4>
                        <div class="card-header-action">
                        <a href="{{ route('regtraining', $item->id_training) }}" class="btn btn-primary">Follow</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>It's Just {{ $item->quota }} Quota</h4>
                        <div>{{ $item->description_training }}</div>
                        <div>Registration's open at {{ date('d-m-Y', strtotime($item->opening_date)) }}</div>
                        <div>and will be closed at {{ date('d-m-Y', strtotime($item->closing_date)) }}</div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </section>
      </div>
    @include('sweetalert::alert')
@endsection