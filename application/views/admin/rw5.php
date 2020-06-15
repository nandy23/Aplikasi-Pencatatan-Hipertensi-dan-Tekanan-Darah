<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">

            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $title; ?></h3>
                    <hr class="sidebar-divider">
                </div>


                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPasien"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Pasien</a>
                        </div>
                    </div>
                </div>


                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="example1" style="font-size:13px;">
                                            <thead>
                                                <tr>
                                                    <th style="width:5px;">No</th>
                                                    <th>Nama</th>
                                                    <th>Tanggal Periksa</th>
                                                    <th style="text-align:center;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 0;
                                                foreach ($rw5->result_array() as $p) :
                                                    $no++;
                                                ?>
                                                    <tr>
                                                        <td><?= $no; ?></td>
                                                        <td><?= $p['nama_warga']; ?></td>
                                                        <td><?= $p['tanggal_periksa']; ?></td>
                                                        <td style="text-align:center;">
                                                            <a class="btn" data-toggle="modal" data-target="#ModalEditPasien<?= $p['id']; ?>"><span class="fas fa-edit"></span></a>
                                                            <a class="btn" href="<?= base_url('rw5/lap_pasien_hasil/'); ?><?= encrypt_url($p['id']); ?>"><span class="fas fa-print"></span></a>
                                                            <a class="btn" data-toggle="modal" data-target="#ModalHapusPasien<?= $p['id']; ?>"><span class="fa fa-trash"></span></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->


    <!--TAMBAH PASIEN-->
    <div class="modal fade" id="ModalTambahPasien" tabindex="-1" role="dialog" aria-labelledby="ModalTambahPasienLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <div class="modal-header">
                            <h3 class="modal-title" id="ModalTambahPasienLabel">Tambah Warga</h3>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="<?= base_url('rw5/simpan'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="inputpasien">Nama Warga</label>
                                            <input type="text" class="form-control" id="nama_pasien" name="nama_warga" placeholder="Nama Pasien" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputpasien">Tanggal Periksa</label>
                                            <input type="text" class="form-control pull-right datepicker" id="tanggal_periksa" name="tanggal_periksa" autocomplete="off" required>
                                        </div>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END TAMBAH PASIEN-->

    <!--EDIT PASIEN-->
    <?php foreach ($rw5->result_array() as $p) : ?>
        <div class="modal fade" id="ModalEditPasien<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalEditPasienLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="panel">
                        <div class="panel-heading">
                            <div class="modal-header">
                                <h3 class="modal-title" id="ModalEditPasienLabel">Edit Warga</h3>
                            </div>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" action="<?= base_url('rw5/ubah'); ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <input type="hidden" name="id" value="<?= $p['id']; ?> ">
                                            <input type="hidden" name="nama_warga1" value="<?= $p['nama_warga']; ?> ">

                                            <div class="form-group">
                                                <label for="inputpasien">Nama</label>
                                                <input type="text" class="form-control" id="inputpasien" name="nama_warga" value="<?= $p['nama_warga']; ?> " autocomplete="off" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputobat">Tanggal Periksa</label>
                                                <input type="text" name="tanggal_periksa" class="form-control pull-right datepicker" id="datepicker" autocomplete="off" required>
                                            </div>
                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php endforeach; ?>
<!--END EDIT PASIEN-->

<!--HAPUS SATUAN-->
<?php foreach ($rw5->result_array() as $p) : ?>
    <div class="modal fade" id="ModalHapusPasien<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalHapusPasienLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="panel">
                    <div class="panel-heading">
                        <div class="modal-header">
                            <h3 class="modal-title" id="ModalHapusPasienLabel">Hapus Pasien</h3>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="<?php echo base_url('rw5/hapus'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="hidden" name="id" value="<?= $p['id']; ?>" />
                                        <p>Menghapus pasien dapat <strong>menghapus</strong> data yang bersangkutan</p>
                                        <p>Apakah Anda yakin mau menghapus ? <b><?= $p['nama_warga']; ?></b> ?</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!--END HAPUS SATUAN-->