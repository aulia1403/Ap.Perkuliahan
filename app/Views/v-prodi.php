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
                        <th>kode prodi</th>
                        <th>nama prodi</th>
                        <th width="100"px>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1;
                    foreach ($prodi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['kode_prodi'] ?></td>
                            <td><?= $value['nama_prodi'] ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-data<?= $value['kode_prodi'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-data<?= $value['kode_prodi'] ?>"><i class="fas fa-trash" ></i></button>
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
              <h4 class="modal-title">Tambah Data Prodi<?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Prodi/InsertData') ?>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">kode prodi</label>
                    <input name="kode_prodi" class="form-control" placeholder="kode_prodi" required> 
                    </div>

                    <div class="form-group">
                    <label for="">nama prodi</label>
                    <input name="nama_prodi" class="form-control" placeholder="nama_prodi" required> 
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
<?php foreach ($prodi as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['kode_prodi'] ?>">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php echo form_open('Prodi/UpdateData/' . $value['kode_prodi']) ?>
            <div class="modal-body">
                    <label for="">kode prodi</label>
                    <input name="kode_prodi" value="<?= $value['kode_prodi'] ?>" class="form-control" placeholder="kode_prodi" required> 
                    </div>

                    <div class="form-group">
                    <label for="">nama prodi</label>
                    <input name="nama_prodi" value="<?= $value['nama_prodi'] ?>" class="form-control" placeholder="nama_prodi" required> 
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
<?php foreach ($prodi as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['kode_prodi'] ?>">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Data <?= $subjudul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
                Apakah anda yakin hapus data <b><?= $value['kode_prodi'] ?></b> ..?
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <a href="<?= base_url('Prodi/DeleteData/' .$value['kode_prodi']) ?>" class="btn btn-danger btn-flat">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<?php } ?>