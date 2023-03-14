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
                            <th colspan="3" style="text-align: center; vertical-align: middle">
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
                                Jumlah
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Satuan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($sentra as $sentra) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td><?= $sentra->nama_sentra; ?></td>
                                <td><?= $sentra->jenis_ikm; ?></td>
                                <td><?= $sentra->kbli; ?></td>
                                <td><?= $sentra->alamat_sentra; ?></td>
                                <td><?= $sentra->desa; ?></td>
                                <td><?= $sentra->kecamatan; ?></td>
                                <td><?= $sentra->kontak; ?></td>
                                <td><?= $sentra->telepon; ?></td>
                                <td><?= $sentra->unit; ?></td>
                                <td><?= $sentra->tenaga_kerja; ?></td>
                                <td><?= $sentra->nilai_investasi; ?></td>
                                <td><?= $sentra->jumlah; ?></td>
                                <td><?= $sentra->satuan; ?></td>
                                <td><?= $sentra->nilai_produksi; ?></td>
                                <td><?= $sentra->nilai_bb; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>