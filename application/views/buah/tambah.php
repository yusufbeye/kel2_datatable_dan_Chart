<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Tambah Buah</h1>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="form-group row">
            <label for="nama_buah" class="col-sm-2 col-form-label">Nama Buah</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="nama_buah" name="nama_buah">
                <small class="form-text text-danger"><?= form_error('nama_buah'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="harga" name="harga">
                <small class="form-text text-danger"><?= form_error('harga'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="terjual" class="col-sm-2 col-form-label">Terjual</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="terjual" name="terjual">
                <small class="form-text text-danger"><?= form_error('terjual'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">STOK</label>
            <div class="col-sm-10">
                <input type="teks" class="form-control" id="stok" name="stok">
                <small class="form-text text-danger"><?= form_error('stok'); ?></small>
            </div>
        </div>
        
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>