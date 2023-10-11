@extends('layouts.user_layout')

@section('content')
    <section class="pt-4 me-3">
        <div class="card">
            <div class="card-body">
                <p class="fs-2 mb-4 text-center">Hasil Diagnosa</p>
                <p class="fs-3 text-center">Maaf, hasil dengan diagnosa anda tidak ditemukan</p>
                <p class="fs-5 text-center">anda dapat melakukan diagnosa ulang,<a href="{{ route('diagnosa.index') }}">Klik disini</a></p>
            </div>
        </div>
    </section>
@endsection
