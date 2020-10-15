<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Semua Produk
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Semua</h3>
            <a href="<?php echo base_url('app/produk/baru') ?>" class="btn btn-sm btn-primary btn-flat pull-right">Tambah Baru</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <?php if ($this->session->flashdata('pesan') == TRUE) { ?>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <?php echo $this->session->flashdata('pesan') ?>
            </div>
            <?php } ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Link</th>
                <th>Gambar</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
              <?php
              $no = 1;
              foreach ($all as $so) {
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $so->nama ?></td>
                <td><?php echo $so->sub_nama ?></td>
                <td>
                  <img width="100" src="<?php echo base_url('uploads/portfolio/'.$so->gambar) ?>">
                </td>
                <td>
                  <a href="<?php echo base_url('app/produk/edit/'.$so->id_produk) ?>" class="btn btn-flat btn-sm btn-info">Edit</a>
                  <a onclick="return confirm('Apakah anda yakin ?')" href="<?php echo base_url('app/produk/hapus/'.$so->id_produk) ?>" class="btn btn-flat btn-sm btn-danger">Hapus</a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>