<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Tambah Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash() ?>" readonly>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang">
                  </div>
                  <?= form_error('nama'); ?>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea row="7" type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"></textarea>
                  </div>
                  <?= form_error('deskripsi'); ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <input type="button" class="btn btn-warning" value="Kembali" onclick="history.back(-1)" />
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->