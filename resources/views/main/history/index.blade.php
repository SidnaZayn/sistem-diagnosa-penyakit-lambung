@extends('layouts.user_layout')

@section('content')
    <section class="pt-4 pe-3">
        <div class="card w-100 h-100 shadow">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <p><b>History Diagnosa Pasien</b></p>
                </div>
                <table id="table-history">
                    <thead>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>Umur</th>
                            <th>Diagnosa Penyakit</th>
                            <th>Tanggal Diagnosa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($histories as $history)
                        <tr>
                            <td>
                                {{ $history->pasien->nama }}
                            </td>
                            <td>
                                {{ $history->pasien->umur }}
                            </td>
                            <td>
                                {{ $history->penyakit_solusi->nama_penyakit }}
                            </td>
                            <td>
                                {{ $history->created_at }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        let table = new DataTable('#table-history');
    </script>
@endsection
