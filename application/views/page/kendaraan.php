<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<div class="container-fluid">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a class="btn btn-success" href="addkendaraan" role="button">Tambah Kendaraan</a><br>
<br>
<?= $this->session->flashdata('message') ?>
                <table id="example2" class="table table-bordered table-striped">
                  <thead class="bg-dark">
                  <tr>
                    <th>No</th>
                    <th>Jenis Kendaraan</th>
                    <th>Merk Kendaraan</th>
                    <th>Plat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($kendaraan as $kendaraan){ ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $kendaraan->jenis_kendaraan; ?></td>
                    <td><?= $kendaraan->merk_kendaraan; ?></td>
                    <td><?= $kendaraan->plat; ?></td>
                    <td><h6><a href="<?php echo 'editkendaraan/'.$kendaraan->id ?>" class="badge badge-warning" style="color:white;">Ubah</a> 
                    <a href="<?php echo 'deletekendaraan/'.$kendaraan->id ?>" class="badge badge-danger">Hapus</a></h6></td>
                  </tr>
                  <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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