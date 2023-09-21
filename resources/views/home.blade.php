@extends('layouts.user_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="p-3">
            <div class="card">
                <div class="card-header d-flex justify-content-center">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex justify-content-center align-content-center">
                    <div class="text-center">
                        <h1>Selamat Datang di SIPAKLAM</h1>
                        <h3>(Sistem Penyakit Lambung)</h3>
                        <hr>
                        <p>Silahkan Gunakan Aplikasi Dengan Bijak</p>
                        <a href="{{ route('diagnosa.index') }}">mulai disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
