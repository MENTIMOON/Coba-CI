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
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>