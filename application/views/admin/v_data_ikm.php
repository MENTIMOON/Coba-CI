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
        <a href="<?= base_url('data_ikm/input') ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data</a>
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
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                No
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Nama Sentra
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Jenis Industri
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                KBLI
                            </th>
                            <th colspan="4" style="text-align: center; vertical-align: middle">
                                Alamat
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Kontak
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Telepon
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Unit
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Tenaga Kerja
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Nilai Investasi
                            </th>
                            <th colspan="2" style="text-align: center; vertical-align: middle">
                                Kapasitas Produksi
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Nilai Produksi
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Nilai BB/BP
                            </th>
                            <th rowspan="2" style="text-align: center; vertical-align: middle">
                                Aksi
                            </th>
                        </tr>
                        <tr>
                            <th style="text-align: center; vertical-align: middle">
                                Dusun/Jalan
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
                                Jumlah
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Satuan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($lokasi as $lks) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td><?= $lks['nama_sentra']; ?></td>
                                <td><?= $lks['jenis_ikm']; ?></td>
                                <td><?= $lks['kbli']; ?></td>
                                <td><?= $lks['alamat_sentra']; ?></td>
                                <td><?= $lks['desa']; ?></td>
                                <td><?= $lks['kecamatan']; ?></td>
                                <td><?= $lks['kabupaten']; ?></td>
                                <td><?= $lks['kontak']; ?></td>
                                <td><?= $lks['telepon']; ?></td>
                                <td><?= $lks['unit']; ?></td>
                                <td><?= $lks['tenaga_kerja']; ?></td>
                                <td><?= $lks['nilai_investasi']; ?></td>
                                <td><?= $lks['jumlah']; ?></td>
                                <td><?= $lks['satuan']; ?></td>
                                <td><?= $lks['nilai_produksi']; ?></td>
                                <td><?= $lks['nilai_bb']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-default">
                                        <a href="<?= base_url('data_ikm/edit/') ?><?= $lks['id_lokasi'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                    </button>
                                    <button type="button" class="btn btn-default">
                                        <a href="<?= base_url('data_ikm/delete/') ?><?= $lks['id_lokasi'] ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><span class="glyphicon glyphicon-trash"></span></a>
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