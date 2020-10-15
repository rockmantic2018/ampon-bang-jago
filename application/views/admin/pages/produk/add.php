<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Produk
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah</h3>
            <a href="<?php echo base_url('app/produk') ?>" class="btn btn-sm btn-default btn-flat pull-right">Kembali</a>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form enctype="multipart/form-data" role="form" method="post" action="">
            <div class="box-body">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" required="" name="nama">
              </div>
              <div class="form-group">
                <label>Sub Nama</label>
                <input type="text" class="form-control" name="sub">
                <p class="help-block">Sub nama/kepanjangan dari nama produk</p>
              </div>
              <div class="form-group">
                <label>Link Demo</label>
                <input type="text" class="form-control" required="" value="#" name="link">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Gambar</label>
                <input type="file" id="exampleInputFile" name="foto">
                <p class="help-block">Maksimal 2MB. Format JPG/JPEG/PNG</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>