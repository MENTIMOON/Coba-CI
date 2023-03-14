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
    <div class="tambah">
        <a href="<?= base_url('data_eksportir/input') ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data</a>
    </div>
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
                                Nama Perusahaan
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Desa
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kecamatan
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kabupaten/Kota
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Komoditi
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Jenis Perusahaan
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Skala Perusahaan
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($lokasi as $l) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td><?= $l['nama_prshn']; ?></td>
                                <td><?= $l['desa']; ?></td>
                                <td><?= $l['kecamatan']; ?></td>
                                <td><?= $l['kabupaten']; ?></td>
                                <td><?= $l['komoditi']; ?></td>
                                <td><?= $l['jenis_prshn']; ?></td>
                                <td><?= $l['skala_prshn']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-default">
                                        <a href="<?= base_url('data_eksportir/edit/') ?><?= $l['id_eksportir'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </button>
                                    <button type="button" class="btn btn-default">
                                        <a href="<?= base_url('data_eksportir/delete/') ?><?= $l['id_eksportir'] ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><span class="glyphicon glyphicon-trash"></span></a>
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