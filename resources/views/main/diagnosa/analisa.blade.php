@extends('layouts.user_layout')

@section('content')
    <section class="pt-4 me-3">
        <div class="card">
            <div class="card-body">
                <p class="fs-2 mb-4 text-center">Hasil Diagnosa</p>

                <p>Anda didiagnosa menderita:
                    {{-- {{$hasil}} --}}
                    <a href="{{ route('penyakit_solusi.index') }}#{{ $hasil->nama_penyakit }}">
                        {{ $hasil->nama_penyakit }}</a>
                </p>
                <p class="fs-4">Definisi</p>
                <p>{{$hasil->definisi}}</p>
                <p class="fs-4 mt-2">Solusi</p>
                <p>{{$hasil->solusi}}</p>
                <p class="fs-4 mt-2">Tindak Lanjut</p>
                <p>{{$hasil->tindak_lanjut}}</p>
                <p class="fs-4 mt-2">Obat</p>
                <p>{{$hasil->obat}}</p>
            </div>
        </div>
    </section>
@endsection
