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
                                Desa
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kecamatan
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kabupaten/Kota
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Nama Pasar
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Luas Lahan (m<sup>2</sup>)
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Luas Bangunan (m<sup>2</sup>)
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kelas/Tipe Pasar
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Pasaran
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Jumlah Pedagang
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Menempati Kios
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Menempati Los
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Menempati Lapak
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Rata-Rata Omzet/bulan
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Rata-Rata Retribusi/bulan
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
                                <td><?= $l['desa']; ?></td>
                                <td><?= $l['kecamatan']; ?></td>
                                <td><?= $l['kabupaten']; ?></td>
                                <td><?= $l['nama_pasar']; ?></td>
                                <td><?= $l['luas_lahan']; ?></td>
                                <td><?= $l['luas_bangunan']; ?></td>
                                <td><?= $l['tipe_pasar']; ?></td>
                                <td><?= $l['pasaran']; ?></td>
                                <td><?= $l['jml_pedagang']; ?></td>
                                <td><?= $l['kios']; ?></td>
                                <td><?= $l['los']; ?></td>
                                <td><?= $l['lapak']; ?></td>
                                <td><?= $l['omzet']; ?></td>
                                <td><?= $l['retribusi']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>