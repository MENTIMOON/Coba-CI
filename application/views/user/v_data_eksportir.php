<div class="container-fluid">
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
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>