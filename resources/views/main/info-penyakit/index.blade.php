@extends('layouts.user_layout')

@section('content')
    <section class="pt-4 pe-3">
        <div class="card w-100 h-100 shadow p-4">
            <div class="card-body" style="max-height: 90vh; overflow-y: auto;">
                <p class="fs-1 text-center"><strong> Daftar Penyakit Lambung</strong></p>
                @foreach ($penyakit_solusi as $penyakit_solusi)
                    <div id="{{ $penyakit_solusi->nama_penyakit }}" class="my-4">
                        <p class="fs-3 mb-2"><strong>{{ $penyakit_solusi->nama_penyakit }}</strong></p>
                        <ul>
                            <li><label><strong>Definisi Penyakit :</strong></label>
                                <p>{{ $penyakit_solusi->definisi }}</p>
                            </li>
                            <li><label><strong>Solusi :</strong></label>
                                <p>{{ $penyakit_solusi->solusi }}</p>
                            </li>
                            <li><label><strong>Tindak Lanjut :</strong></label>
                                <p>{{ $penyakit_solusi->tindak_lanjut }}</p>
                            </li>
                            <li><label><strong>Obat :</strong></label>
                                <p>{{ $penyakit_solusi->obat }}</p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
