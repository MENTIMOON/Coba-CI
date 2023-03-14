<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div id="map" style="width: 100%; height: 938px;"></div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $judul ?></h3>
                </div>
                <div class="panel-body">
                    <form action="<?= base_url('Data_ikm/input'); ?>" method="POST">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="nama_sentra">Nama Sentra</label>
                                <input type="text" class="form-control" name="nama_sentra" placeholder="Nama Sentra" autocomplete="off" value="<?= set_value('nama_sentra'); ?>">
                                <div class="form-text text-danger"><?= form_error('nama_sentra') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="jenis_ikm">Jenis Industri</label>
                                <select class="form-control selectpicker" data-live-search="true" name="jenis_ikm" id="jenisIkm" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($jenis_ikm as $jikm) : ?>
                                        <option value="<?= $jikm['id_jenis_ikm']; ?>"><?= $jikm['jenis_ikm']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kbli">KBLI</label>
                            <input type="text" class="form-control" name="kbli" placeholder="Klasifikasi Baku Lapangan usaha Indonesia" autocomplete="off" value="<?= set_value('kbli'); ?>">
                            <div class="form-text text-danger"><?= form_error('kbli') ?></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="alamat">Dusun/Jalan</label>
                                <input type="text" class="form-control" name="alamat_sentra" placeholder="Dusun/Jalan" autocomplete="off" value="<?= set_value('alamat_sentra'); ?>">
                                <div class="form-text text-danger"><?= form_error('alamat_sentra') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="desa">Desa</label>
                                <select class="form-control selectpicker" data-live-search="true" name="desa" id="nmDesa" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($desa as $d) : ?>
                                        <option value="<?= $d['id_desa']; ?>"><?= $d['desa']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control selectpicker" data-live-search="true" name="kecamatan" id="nmKecamatan" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($kecamatan as $k) : ?>
                                        <option value="<?= $k['id_kecamatan']; ?>"><?= $k['kecamatan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="kabupaten">Kabupaten/Kota</label>
                                <select class="form-control selectpicker" data-live-search="true" name="kabupaten" id="nmKabupaten" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                        <option value="<?= $kab['id_kabupaten']; ?>"><?= $kab['kabupaten']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="kontak">Kontak</label>
                                <input type="text" class="form-control" name="kontak" placeholder="Kontak" autocomplete="off" value="<?= set_value('kontak'); ?>">
                                <div class="form-text text-danger"><?= form_error('kontak') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="telepon">Telepon</label>
                                <input type="text" class="form-control" name="telepon" placeholder="Nomor yang bisa dihubungi" autocomplete="off" value="<?= set_value('telepon'); ?>">
                                <div class="form-text text-danger"><?= form_error('telepon') ?></div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="unit">Unit Usaha (Unit)</label>
                                <input type="text" class="form-control" name="unit" placeholder="Jumlah Unit" autocomplete="off" value="<?= set_value('unit'); ?>">
                                <div class="form-text text-danger"><?= form_error('unit') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="tenaga_kerja">Tenaga Kerja (Orang)</label>
                                <input type="text" class="form-control" name="tenaga_kerja" placeholder="Jumlah Tenaga Kerja" autocomplete="off" value="<?= set_value('tenaga_kerja'); ?>">
                                <div class="form-text text-danger"><?= form_error('tenaga_kerja') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nilai_investasi">Nilai Investasi</label>
                            <input type="text" class="form-control" name="nilai_investasi" placeholder="Nilai Investasi" autocomplete="off" value="<?= set_value('nilai_investasi'); ?>">
                            <div class="form-text text-danger"><?= form_error('nilai_investasi') ?></div>
                        </div>
                        <div><b>Kapasitas Produksi:</b></div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="jumlah">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Produksi" autocomplete="off" value="<?= set_value('jumlah'); ?>">
                                <div class="form-text text-danger"><?= form_error('jumlah') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="satuan">Satuan</label>
                                <input type="text" class="form-control" name="satuan" placeholder="Satuan (kg/biji/liter/dll.)" autocomplete="off" value="<?= set_value('satuan'); ?>">
                                <div class="form-text text-danger"><?= form_error('satuan') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nilai_produksi">Nilai Produksi</label>
                            <input type="text" class="form-control" name="nilai_produksi" placeholder="Nilai Produksi" autocomplete="off" value="<?= set_value('nilai_produksi'); ?>">
                            <div class="form-text text-danger"><?= form_error('nilai_produksi') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="nilai_bb">Nilai BB/BP</label>
                            <input type="text" class="form-control" name="nilai_bb" placeholder="Nilai BB/BP" autocomplete="off" value="<?= set_value('nilai_bb'); ?>">
                            <div class="form-text text-danger"><?= form_error('nilai_bb') ?></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" name="latitude" placeholder="Latitude" autocomplete="off" value="<?= set_value('latitude'); ?>">
                                <div class="form-text text-danger"><?= form_error('latitude') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" name="longitude" placeholder="Longitude" autocomplete="off" value="<?= set_value('longitude'); ?>">
                                <div class="form-text text-danger"><?= form_error('longitude') ?></div>
                            </div>
                        </div>
                        <button type="submit" name="input" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a class="btn btn-success" href="<?= base_url('Admin/ikm') ?>" role="button" style="float: right;">Kembali</a>
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