@extends('layouts.admin_layout')

@section('content')
    <section id="dashboard-admin" class="mt-4 me-3">
        <div class="card p-3">
            <div class="card-body">
                <h1 class="text-center">Penyakit-Solusi</h1>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>Prioritas</th>
                            <th>Terakhir di update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyakit_solusi as $item)
                            <tr>
                                <td>{{ $item->nama_penyakit }}</td>
                                <td>{{ $item->priority }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ route('penyakit_solusi_admin.edit', $item->id) }}" class="btn btn-primary me-2">Edit</a>
                                    <a href="{{ route('penyakit_solusi_admin.show', $item->id) }}" class="btn btn-info">Show</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
