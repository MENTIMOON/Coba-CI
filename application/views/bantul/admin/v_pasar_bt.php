<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= $judul ?></h3>
        </div>
        <div class="panel-body">
            <div class="table">
                <table id="example" class="display nowrap table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; vertical-align: middle">
                                No
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Desa
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kecamatan
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
                        foreach ($pasar as $pasar) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td><?= $pasar->desa; ?></td>
                                <td><?= $pasar->kecamatan; ?></td>
                                <td><?= $pasar->nama_pasar; ?></td>
                                <td><?= $pasar->luas_lahan; ?></td>
                                <td><?= $pasar->luas_bangunan; ?></td>
                                <td><?= $pasar->tipe_pasar; ?></td>
                                <td><?= $pasar->pasaran; ?></td>
                                <td><?= $pasar->jml_pedagang; ?></td>
                                <td><?= $pasar->kios; ?></td>
                                <td><?= $pasar->los; ?></td>
                                <td><?= $pasar->lapak; ?></td>
                                <td><?= $pasar->omzet; ?></td>
                                <td><?= $pasar->retribusi; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>