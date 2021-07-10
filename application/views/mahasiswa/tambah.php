<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah
            </div>
                <div class="card-body">
                        <!-- <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?> -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama"  placeholder="nama">
                            <small class="form-text text-danger"><?= form_error('nama');  ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp" placeholder="Nrp">
                            <small class="form-text text-danger"><?= form_error('nrp');  ?></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                            <small class="form-text text-danger"><?= form_error('email');  ?></small>
                        </div>

                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                                <select class="custom-select" id="jurusan" name="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Sistem Informasi">Teknik Sistem Informasi</option>
                                </select>
                        </div>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
       </div> 
    </div>

</div>