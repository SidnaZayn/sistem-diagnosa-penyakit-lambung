@extends('layouts.user_layout')

@section('content')
<section class="pt-4">
    <div class="row">
        <div class="card w-100 ml-3 mr-5 pb-3">
            <div class="card-body">
                <h5 class="card-title">Registrasi Pasien..</h5>
                <!-- Horizontal Form -->
                <form action="{{ route('diagnosa.createPasien') }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Anda</label>
                        <div class="col-sm-10">
                            <input name="nama" id="nama" type="text" class="form-control" value="<?php echo $row['name']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="kelamin" id="kelamin" class="form-select">
                                <option value="" selected disabled>--pelih jenis kelamin--</option>
                                <option value="pria">pria</option>
                                <option value="wanita">wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="umur" value="<?php echo $row['age']; ?>" id="umur" type="text" size="2" maxlength="3" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>" id="alamat" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="email" value="<?php echo $row['email']; ?>" id="email" required>
                        </div>
                    </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Register Diagnosa</button>
                    </div>
                </form><!-- End Horizontal Form -->

            </div>
        </div>
    </div>
</section>
@endsection()