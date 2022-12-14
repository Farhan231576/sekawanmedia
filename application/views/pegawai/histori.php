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
                <h3 class="card-title">Data Histori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
<br>
<?= $this->session->flashdata('message') ?>
                <table id="example2" class="table table-bordered table-striped">
                  <thead class="bg-dark">
                  <tr>
                  <th>No</th>
                    <th>Jenis Kendaraan</th>
                    <th>Driver</th>
                    <th>Barang</th>
                    <th>Durasi</th>
                    <th>Nama Penyewa</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($histori as $histori){ ?>
                  <tr>
                  <td><?= $no ?></td>
                    <td><?= $histori->jenis_kendaraan; ?></td>
                    <td><?= $histori->driver; ?></td>
                    <td><?= $histori->barang; ?></td>
                    <td><?= $histori->durasi; ?> Hari</td>
                    <td><?= $histori->nama_penyewa; ?></td>
                    <td><span class="badge badge-<?php if($histori->status == 'berhasil'){ echo 'success'; }else{ echo 'warning'; }?>" style="color:white;"><?= $histori->status; ?></span></td>
                    <td><h5><?php if($histori->status != 'berhasil'){
                        $s = 'konfirmasiselesai/'.$histori->id;
                        echo "<a href='$s' class='badge badge-success' style='color:white;'>Konfirmasi Selesai</a></h5>";
                    } ?>
                    </td>
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