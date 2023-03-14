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
                                Nama Pasar
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Desa
                            </th>
                            <th style="text-align: center; vertical-align: middle">
                                Kecamatan
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
                        foreach ($ekspor as $ekspor) : ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td><?= $ekspor->nama_prshn; ?></td>
                                <td><?= $ekspor->desa; ?></td>
                                <td><?= $ekspor->kecamatan; ?></td>
                                <td><?= $ekspor->komoditi; ?></td>
                                <td><?= $ekspor->jenis_prshn; ?></td>
                                <td><?= $ekspor->skala_prshn; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>