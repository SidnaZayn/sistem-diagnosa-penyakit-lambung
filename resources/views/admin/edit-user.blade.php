@extends('layouts.admin_layout')

@section('content')
    <section id="edit-user" class="mt-4 me-3">
        <div class="card p-3">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama" id="nama" type="text" class="form-control"
                                value="{{ $user->name }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" id="email" type="email" class="form-control"
                                value="{{ $user->email }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select name="gender" id="gender" class="form-select">
                                @if ($user->gender)
                                    <option value="{{ $user->gender }}" selected disabled>{{ $user->gender }}</option>
                                @else
                                    <option value="" selected disabled>--pilih gender--</option>
                                @endif
                                <option value="pria">pria</option>
                                <option value="wanita">wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="usia" class="col-sm-2 col-form-label">usia</label>
                        <div class="col-sm-10">
                            <input name="usia" id="usia" type="number" class="form-control"
                                value="{{ $user->age }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input name="alamat" id="alamat" type="text" class="form-control"
                                value="{{ $user->alamat }}" required>
                        </div>
                    </div>
                    <a href="{{ route('admin') }}" class="btn btn-danger">kembali</a>
                    <button type="submit" class="btn btn-primary float-end">simpan</button>
            </div>
        </div>
    </section>
@endsection
