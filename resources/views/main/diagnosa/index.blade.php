@extends('layouts.user_layout')

@section('content')
<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Registrasi Pasien..</h5>
                <!-- Horizontal Form -->
                <form action="pasienaddsim.php">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Anda</label>
                        <div class="col-sm-10">
                            <input name="TxtNama" id="TxtNama" type="text" class="form-control" value="<?php echo $row['name']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input name="TxtGender" id="TxtGender" class="form-control" value="<?php echo $row['gender']; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="TxtUmur" value="<?php echo $row['age']; ?>" id="TxtUmur" type="text" size="2" maxlength="3" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="TxtAlamat" value="<?php echo $row['alamat']; ?>" id="TxtAlamat" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="textemail" value="<?php echo $row['email']; ?>" id="textemail" required>
                        </div>
                    </div>
                    <!-- <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="<?php echo $row['email']; ?>" name="textemail" id="textemail" required>
                        </div> -->
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