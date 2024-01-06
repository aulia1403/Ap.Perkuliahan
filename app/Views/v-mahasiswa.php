<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add-data"><i class="fas fa-plus"></i> Tambah Data
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                if (session()->getFlashdata('pesan')) {
                    echo ' <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h5></div>';
                }

                ?>
              <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                        <th width="50px">No</th>
                        <th>Nim</th>
                        <th>Nama Mahasiswa</th>
                        <th>prodi</th>
                        <th>semester</th>
                        <th>kelas</th>
                        <th>alamat</th>
                        <th width="100"px>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach ($mahasiswa as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['nim'] ?></td>
                            <td><?= $value['nama'] ?></td>
                            <td><?= $value['prodi'] ?></td>
                            <td><?= $value['semester'] ?></td>
                            <td><?= $value['kelas'] ?></td>
                            <td><?= $value['alamat'] ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-data<?= $value['nim'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-data<?= $value['nim'] ?>"><i class="fas fa-trash" ></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

          <!-- /.model add data -->
<div class="modal fade" id="add-data">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Mahasiswa<?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Mahasiswa/InsertData') ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">nim</label>
                    <input name="nim" class="form-control" placeholder="nim" required> 
                    </div>

                    <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input name="nama" class="form-control" placeholder="nama" required> 
                    </div>

                    <div class="form-group">
                    <label for="">prodi</label>
                    <input name="prodi" class="form-control" placeholder="prodi" required> 
                    </div>

                    <div class="form-group">
                    <label for="">semester</label>
                    <input name="semester" class="form-control" placeholder="semeseter" required> 
                    </div>
                    
                    <div class="form-group">
                    <label for="">kelas</label>
                    <input name="kelas" class="form-control" placeholder="kelas" required> 
                    </div>

                    <div class="form-group">
                    <label for="">alamat</label>
                    <input name="alamat" class="form-control" placeholder="alamat" required> 
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


 <!-- /.model edit data -->
<?php foreach ($mahasiswa as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['nim'] ?>">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Mahasiswa/UpdateData/' . $value['nim']) ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">nim</label>
                    <input name="nim" value="<?= $value['nim'] ?>" class="form-control" placeholder="nim" required> 
                    </div>

                    <div class="form-group">
                    <label for="">nama</label>
                    <input name="nama" value="<?= $value['nama'] ?>" class="form-control" placeholder="nama" required> 
                    </div>

                    <div class="form-group">
                    <label for="">prodi</label>
                    <input name="prodi" value="<?= $value['prodi'] ?>" class="form-control" placeholder="prodi" required> 
                    </div>

                    <div class="form-group">
                    <label for="">semester</label>
                    <input name="semester" value="<?= $value['semester'] ?>" class="form-control" placeholder="semester" required> 
                    </div>

                    <div class="form-group">
                    <label for="">kelas</label>
                    <input name="kelas" value="<?= $value['kelas'] ?>" class="form-control" placeholder="kelas" required> 
                    </div>

                    <div class="form-group">
                    <label for="">alamat</label>
                    <input name="alamat" value="<?= $value['alamat'] ?>" class="form-control" placeholder="alamat" required> 
                    </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-warning btn-flat">Simpan</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php } ?>




<!-- /.model hapus data -->
<?php foreach ($mahasiswa as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['nim'] ?>">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
                Apakah anda yakin hapus data <b><?= $value['nim'] ?></b> ..?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <a href="<?= base_url('Mahasiswa/DeleteData/' .$value['nim']) ?>" class="btn btn-danger btn-flat">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php } ?>