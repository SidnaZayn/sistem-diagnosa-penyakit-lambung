@extends('layouts.admin_layout')

@section('content')
    <section id="dashboard-admin" class="mt-4 me-3">
        <div class="card p-3">
            <div class="card-body">
                <h1 class="text-center">Penyakit-Solusi Show</h1>
                <div class="mt-4">
                    <div class="row mb-3">
                        <label for="nama_penyakit" class="col-sm-2 col-form-label">Nama Penyakit</label>
                        <div class="col-sm-10">
                            <input name="nama_penyakit" id="nama_penyakit" type="text" class="form-control"
                                value="{{ $penyakit->nama_penyakit }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="definisi" class="col-sm-2 col-form-label">Definisi</label>
                        <div class="col-sm-10">
                            <textarea name="definisi" id="definisi" cols="30" rows="7" class="form-control" disabled>{{$penyakit->definisi}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="solusi" class="col-sm-2 col-form-label">Solusi</label>
                        <div class="col-sm-10">
                            <textarea name="solusi" id="solusi" cols="30" rows="7" class="form-control" disabled>{{$penyakit->solusi}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tindak_lanjut" class="col-sm-2 col-form-label">tindak lanjut</label>
                        <div class="col-sm-10">
                            <textarea name="tindak_lanjut" id="tindak_lanjut" cols="30" rows="7" class="form-control" disabled>{{$penyakit->tindak_lanjut}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                        <div class="col-sm-10">
                            <textarea name="obat" id="obat" cols="30" rows="7" class="form-control" disabled>{{$penyakit->obat}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="priority" class="col-sm-2 col-form-label">Prioritas</label>
                        <div class="col-sm-10">
                            <input name="priority" id="priority" type="number" class="form-control"
                                value="{{ $penyakit->priority }}" disabled>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('penyakit_solusi_admin.index') }}" class="btn btn-primary me-2">back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
