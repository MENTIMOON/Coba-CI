<div class="container-fluid">
    <?php if ($this->session->flashdata('text')) : ?>
        <div class="row mt-3">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data<strong> berhasil</strong><?= $this->session->flashdata('text'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('hapus')) : ?>
        <div class="row mt-3">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Data<strong> berhasil</strong><?= $this->session->flashdata('hapus'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')) : ?>
        <div class="row mt-3">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?= $this->session->flashdata('error'); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-sm-4">
            <form action="<?= base_url('Data_upload/input') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="berkas">Pilih File</label>
                    <input type="file" class="form-control" name="berkas">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan"></textarea>
                </div>
                <button type="submit" name="input" class="btn btn-primary"><span class="glyphicon glyphicon-upload"></span> Upload</button>
            </form>
        </div>
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $judul ?></h3>
                </div>
                <div class="panel-body">
                    <!-- <div class="col-sm-4" style="float: right;">
                <form action="" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Mencari..." name="keyword">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
            </div> -->
                    <div class="table">
                        <table id="example" class="display nowrap table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle">
                                        No.
                                    </th>
                                    <th style="text-align: center; vertical-align: middle">
                                        File
                                    </th>
                                    <th style="text-align: center; vertical-align: middle">
                                        Tipe File
                                    </th>
                                    <th style="text-align: center; vertical-align: middle">
                                        Ukuran (kb)
                                    </th>
                                    <th style="text-align: center; vertical-align: middle">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($berkas as $b) : ?>
                                    <tr>
                                        <td>
                                            <?= $no++; ?>
                                        </td>
                                        <td><?= $b['keterangan']; ?></td>
                                        <td><?= $b['tipe_berkas']; ?></td>
                                        <td><?= $b['ukuran_berkas']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-default">
                                                <a href="<?= base_url('data_upload/download/') ?><?= $b['id_berkas'] ?>"><span class="glyphicon glyphicon-download"></span></a>
                                            </button>
                                            <button type="button" class="btn btn-default">
                                                <a href="<?= base_url('data_upload/delete/') ?><?= $b['id_berkas'] ?>" onclick="return confirm('Anda yakin ingin menghapus file ini?');"><span class="glyphicon glyphicon-trash"></span></a>
                                            </button>
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