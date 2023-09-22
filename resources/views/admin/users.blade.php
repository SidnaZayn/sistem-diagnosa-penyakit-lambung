@extends('layouts.admin_layout')

@section('content')
    <section id="dashboard-admin" class="mt-4 me-3">
        <div class="card p-3">
            <div class="card-body">
                <h3 class="fs-3 text-center" >Users</h3>
                <table id="table-users">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->umur }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    <button class="btn btn-primary"><i class="bi bi-pen"></i></button>
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
        let table = new DataTable('#table-users');
    </script>
@endsection
