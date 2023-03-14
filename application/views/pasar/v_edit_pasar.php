<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <div id="map" style="width: 100%; height: 770px;"></div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= $judul ?></h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $pasar['id_lokasi_pasar']; ?>">
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="desa">Desa</label>
                                <select class="form-control selectpicker" data-live-search="true" name="desa" id="nmDesa" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($desa as $d) : ?>
                                        <?php if ($d['id_desa'] == $pasar['id_desa']) : ?>
                                            <option value="<?= $d['id_desa']; ?>" selected><?= $d['desa']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d['id_desa']; ?>"><?= $d['desa']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="kecamatan">Kecamatan</label>
                                <select class="form-control selectpicker" data-live-search="true" name="kecamatan" id="nmKecamatan" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($kecamatan as $kec) : ?>
                                        <?php if ($kec['id_kecamatan'] == $pasar['id_kecamatan']) : ?>
                                            <option value="<?= $kec['id_kecamatan']; ?>" selected><?= $kec['kecamatan']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $kec['id_kecamatan']; ?>"><?= $kec['kecamatan']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="kabupaten">Kabupaten/Kota</label>
                                <select class="form-control selectpicker" data-live-search="true" name="kabupaten" id="nmKabupaten" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                        <?php if ($kab['id_kabupaten'] == $pasar['id_kabupaten']) : ?>
                                            <option value="<?= $kab['id_kabupaten']; ?>" selected><?= $kab['kabupaten']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $kab['id_kabupaten']; ?>"><?= $kab['kabupaten']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="nama_pasar">Nama Pasar</label>
                                <input type="text" class="form-control" name="nama_pasar" placeholder="Nama Pasar" value="<?= $pasar['nama_pasar']; ?>">
                                <div class="form-text text-danger"><?= form_error('nama_pasar') ?></div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="luas_lahan">Luas Lahan (m<sup>2</sup>)</label>
                                <input type="text" class="form-control" name="luas_lahan" placeholder="Luas Lahan" autocomplete="off" value="<?= $pasar['luas_lahan']; ?>">
                                <div class="form-text text-danger"><?= form_error('luas_lahan') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="luas_bangunan">Luas Bangunan (m<sup>2</sup>)</label>
                                <input type="text" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan" autocomplete="off" value="<?= $pasar['luas_bangunan']; ?>">
                                <div class="form-text text-danger"><?= form_error('luas_bangunan') ?></div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="tipe_pasar">Kelas/Tipe Pasar</label>
                                <select class="form-control selectpicker" data-live-search="true" name="tipe_pasar" id="tp_pasar" required>
                                    <option value="" selected disabled>-Belum dipilih-</option>
                                    <?php foreach ($tipe as $tipe) : ?>
                                        <?php if ($tipe['id_tipe_pasar'] == $pasar['id_tipe_pasar']) : ?>
                                            <option value="<?= $tipe['id_tipe_pasar']; ?>" selected><?= $tipe['tipe_pasar']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $tipe['id_tipe_pasar']; ?>"><?= $tipe['tipe_pasar']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="pasaran">Pasaran</label>
                                <select class="form-control selectpicker" name="pasaran[]" multiple title="-Belum dipilih-">
                                    <?php foreach ($pasaran as $p) : ?>
                                        <?php if ($p == $pasar['pasaran']) : ?>
                                            <option value="<?= $p; ?>" selected><?= $p; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $p; ?>"><?= $p; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <div class="invalid-feedback"><?php echo form_error('pasaran') ?></div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="jml_pedagang">Jumlah Pedagang</label>
                                <input type="text" class="form-control" name="jml_pedagang" placeholder="Jumlah Pedagang" autocomplete="off" value="<?= $pasar['jml_pedagang']; ?>">
                                <div class="form-text text-danger"><?= form_error('jml_pedagang') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="kios">Menempati Kios</label>
                                <input type="text" class="form-control" name="kios" placeholder="Jumlah pedagang yang menempati" autocomplete="off" value="<?= $pasar['kios']; ?>">
                                <div class="form-text text-danger"><?= form_error('kios') ?></div>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="los">Menempati Los</label>
                                <input type="text" class="form-control" name="los" placeholder="Jumlah pedagang yang menempati" autocomplete="off" value="<?= $pasar['los']; ?>">
                                <div class="form-text text-danger"><?= form_error('los') ?></div>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="lapak">Menempati Lapak</label>
                                <input type="text" class="form-control" name="lapak" placeholder="Jumlah pedagang yang menempati" autocomplete="off" value="<?= $pasar['lapak']; ?>">
                                <div class="form-text text-danger"><?= form_error('lapak') ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="omzet">Rata-Rata Omzet/bulan</label>
                            <input type="text" class="form-control" name="omzet" placeholder="Jumlah Omzet" autocomplete="off" value="<?= $pasar['luas_bangunan']; ?>">
                            <div class="form-text text-danger"><?= form_error('omzet') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="retribusi">Rata-Rata Retribusi/bulan</label>
                            <input type="text" class="form-control" name="retribusi" placeholder="Jumlah Retribusi" autocomplete="off" value="<?= $pasar['luas_bangunan']; ?>">
                            <div class="form-text text-danger"><?= form_error('retribusi') ?></div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" name="latitude" placeholder="Latitude" value="<?= $pasar['latitude']; ?>">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" name="longitude" placeholder="Longitude" value="<?= $pasar['longitude']; ?>">
                            </div>
                        </div>
                        <button type="submit" name="input" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <a class="btn btn-success" href="<?= base_url('Admin/pasar') ?>" role="button" style="float: right;">Kembali</a>
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