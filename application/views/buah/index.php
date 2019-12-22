<?php if ($this->session->flashdata('flash')) : ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Buah <strong> Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      <div class="row mt-3">
        <div class="col-md-6">
          <a href="<?= base_url(); ?>buah/tambah" class="btn btn-primary">Tambah Buah</a>
          
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama Buah</th>
              <th>Harga</th>
              <th>Terjual</th>
              <th>Stok</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
             <th>Nama Buah</th>
              <th>Harga</th>
              <th>Terjual</th>
              <th>Stok</th>
              <th>Opsi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($buah as $b) : ?>
              <tr>
                <td><?= $b['nama_buah']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['terjual']; ?></td>
                <td><?= $b['stok']; ?></td>
        
                  
                </td>
                <td>

                 <a href="<?= base_url(); ?>laporancetak/<?= $b['id']; ?> " class="badge badge-success float-right">Cetak</a>

                  <a href="<?= base_url(); ?>buah/hapus/<?= $b['id']; ?> " class="badge badge-danger float-right" onclick="return confirm('yakin ?');">Hapus</a>
                 
                  <a href="<?= base_url(); ?>buah/ubah/<?= $b['id']; ?> " class="badge badge-success float-right">Ubah</a></td></td>
                
                 
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>