@extends('layouts.user_layout')

@section('content')
    <section class="pt-4 me-3">
        <div class="card">
            <div class="card-body">
                <p class="fs-2 mb-4 text-center">Hasil Diagnosa</p>

                <p>Anda didiagnosa menderita:
                    @foreach ($hasil as $hasil)
                        <a href="{{ route('penyakit_solusi.index') }}#{{ $hasil->penyakit_solusi->nama_penyakit }}">
                            {{ $hasil->penyakit_solusi->nama_penyakit }}</a>,
                    @endforeach
                </p>
            </div>
        </div>
    </section>
@endsection
