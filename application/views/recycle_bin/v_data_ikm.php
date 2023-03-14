<?php
if ($this->session->flashdata('teks')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('teks');
    echo '</div>';
}
?>
<a href="<?= base_url('gis/input') ?>" class="btn btn-primary">Tambah Data IKM</a>
<ul class="list-group">
    <?php foreach ($lokasi as $key => $value) { ?>
        <li class="list-group-item">
            <?= $value->nama_lokasi ?>
            <a href="<?= base_url('gis/hapus/') ?><?= $value->id_lokasi ?>" class="badge" onclick="return confirm('Yakin lu, ajg?');">Hapus</a>
            <a href="<?= base_url('gis/ubah/') ?><?= $value->id_lokasi ?>" class="badge">Ubah</a>
            <a href="<?= base_url('gis/detail/') ?><?= $value->id_lokasi ?>" class="badge">Detail</a>
        </li>
    <?php } ?>
</ul>