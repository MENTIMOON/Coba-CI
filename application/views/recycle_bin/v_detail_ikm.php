<div class="card">
    <div class="card-header">
        Detail Data IKM
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $detailikm['nama_lokasi']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $detailikm['latitude']; ?></h6>
        <h6 class="card-subtitle mb-2 text-muted"><?= $detailikm['longitude']; ?></h6>
        <a href="<?= base_url('gis/data_ikm') ?>" class="btn btn-primary">Balik cuk!</a>
    </div>
</div>