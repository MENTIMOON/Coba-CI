<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div id="map" style="width: 100%; height: 622px;"></div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $judul ?></h3>
                </div>
                <div class="panel-body">
                    <form action="<?= base_url('data_eksportir/input'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama_prshn">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="nama_prshn" placeholder="Nama Perusahaan" autocomplete="off" value="<?= set_value('nama_prshn'); ?>">
                            <div class="form-text text-danger"><?= form_error('nama_prshn') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="desa">Desa</label>
                            <select class="form-control selectpicker" data-live-search="true" name="desa" id="nmDesa" required>
                                <option value="" selected disabled>-Belum dipilih-</option>
                                <?php foreach ($desa as $d) : ?>
                                    <option value="<?= $d['id_desa']; ?>"><?= $d['desa']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control selectpicker" data-live-search="true" name="kecamatan" id="nmKecamatan" required>
                                <option value="" selected disabled>-Belum dipilih-</option>
                                <?php foreach ($kecamatan as $k) : ?>
                                    <option value="<?= $k['id_kecamatan']; ?>"><?= $k['kecamatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten/Kota</label>
                            <select class="form-control selectpicker" data-live-search="true" name="kabupaten" id="nmKabupaten" required>
                                <option value="" selected disabled>-Belum dipilih-</option>
                                <?php foreach ($kabupaten as $kab) : ?>
                                    <option value="<?= $kab['id_kabupaten']; ?>"><?= $kab['kabupaten']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="komoditi">Komoditi</label>
                            <input type="text" class="form-control" name="komoditi" placeholder="Komoditi" autocomplete="off" value="<?= set_value('komoditi'); ?>">
                            <div class="form-text text-danger"><?= form_error('komoditi') ?></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="jenis_prshn">Jenis Perusahaan</label>
                                <select class="form-control selectpicker" name="jenis[]" multiple title="-Belum dipilih-">
                                    <?php foreach ($jenis as $j) : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback"><?php echo form_error('jenis_prshn') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="skala_prshn">Skala Perusahaan</label>
                                <select class="form-control selectpicker" data-live-search="true" name="skala_prshn" id="skalaPrshn" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($skala as $s) : ?>
                                        <option value="<?= $s['id_skala_prshn']; ?>"><?= $s['skala_prshn']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" name="latitude" placeholder="Latitude" autocomplete="off" value="<?= set_value('latitude'); ?>">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" name="longitude" placeholder="Longitude" autocomplete="off" value="<?= set_value('longitude'); ?>">
                            </div>
                        </div>
                        <button type="submit" name="input" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a class="btn btn-success" href="<?= base_url('Admin/ekspor') ?>" role="button" style="float: right;">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    });

    var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/satellite-v9'
    });


    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10'
    });
    var map = L.map('map', {
        center: [-7.797068, 110.370529],
        zoom: 15,
        layers: [peta1],
    });
    var baseLayers = {
        'Default': peta1,
        'Satelite': peta2,
        'Street': peta3,
        'Dark': peta4,
    };
    var layerControl = L.control.layers(baseLayers).addTo(map);
    //GEOJSON
    $.getJSON("<?= base_url('assets/geojson/PROV_YOGYAKARTA.geojson') ?>", function(data) {
        geoLayer = L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: '#8c8c8c',
                    opacity: 1,
                }
            }
        }).addTo(map);
    });
    //GET COORDINAT
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var curLocation = [-7.797068, 110.370529];
    map.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true',
    });
    //GET COORDINAT
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var curLocation = [-7.797068, 110.370529];
    map.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable: 'true',
    });
    //MENGAMBIL KOORDINAT SAAT MARKER DIPINDAH
    marker.on('dragend', function(e) {
        var positon = marker.getLatLng();
        marker.setLatLng(positon, {
            curLocation
        }).bindPopup(positon).update();
        $("#Latitude").val(positon.lat);
        $("#Longitude").val(positon.lng);
    });
    //MENGAMBIL KOORDINAT SAAT DIKLIK
    map.on("click", function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    });
    map.addLayer(marker);
</script>