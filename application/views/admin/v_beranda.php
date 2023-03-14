<div id="map" style="width: 100%; top: 50px; bottom: 0px; position: absolute; box-sizing: content-box;"></div>
<script>
    //PETA
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

    //MARKER
    //IKM
    var blueIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    //PASAR
    var goldIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-gold.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    //EKSPORTIR
    var greenIcon = new L.Icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });
    //PEMETAAN LOKASI
    //IKM
    var ikm = L.layerGroup();
    <?php foreach ($sentra as $s) : ?>
        L.marker([<?= $s['latitude'] ?>, <?= $s['longitude'] ?>], {
            icon: blueIcon
        }).bindPopup("<b><?= $s['nama_sentra'] ?></b><br>" + "Jenis Industri: <?= $s['jenis_ikm'] ?><br>" + "KBLI: <?= $s['kbli'] ?><br>" + "Alamat: <?= $s['alamat_sentra'] ?>, <?= $s['desa'] ?>, <?= $s['kecamatan'] ?><br>" + "Kontak: <?= $s['kontak'] ?><br>" + "Telepon: <?= $s['telepon'] ?><br>" + "Unit Usaha: <?= $s['unit'] ?> unit<br>" + "Tenaga Kerja: <?= $s['tenaga_kerja'] ?> orang<br>" + "Nilai Investasi: Rp. <?= $s['nilai_investasi'] ?>,00<br>" + "Kapasitas Produksi: <?= $s['jumlah'] ?> <?= $s['satuan'] ?><br>" + "Nilai Produksi: Rp. <?= $s['nilai_produksi'] ?>,00<br>" + "Nilai BB/BP: Rp. <?= $s['nilai_bb'] ?>,00").addTo(ikm);
    <?php endforeach; ?>
    //PASAR
    var market = L.layerGroup();
    <?php foreach ($pasar as $p) : ?>
        L.marker([<?= $p['latitude'] ?>, <?= $p['longitude'] ?>], {
            icon: goldIcon
        }).bindPopup("<b><?= $p['nama_pasar'] ?></b><br>" + "Alamat: <?= $p['desa'] ?>, <?= $p['kecamatan'] ?><br>" + "Luas Lahan: <?= $p['luas_lahan'] ?> m<sup>2</sup><br>" + "Luas Bangunan: <?= $p['luas_bangunan'] ?> m<sup>2</sup><br>" + "Kelas/Tipe Pasar: <?= $p['tipe_pasar'] ?><br>" + "Pasaran: <?= $p['pasaran'] ?><br>" + "Jumlah Pedagang: <?= $p['jml_pedagang'] ?><br>" + "Menempati Kios: <?= $p['kios'] ?><br>" + "Menempati Los: <?= $p['los'] ?><br>" + "Menempati Lapak: <?= $p['lapak'] ?><br>" + "Rata-Rata Omzet/bulan: Rp. <?= $p['omzet'] ?>,00<br>" + "Rata-Rata Retribusi/bulan: Rp. <?= $p['retribusi'] ?>,00").addTo(market);
    <?php endforeach; ?>
    //EKSPORTIR
    var ekspor = L.layerGroup();
    <?php foreach ($eksportir as $eks) : ?>
        L.marker([<?= $eks['latitude'] ?>, <?= $eks['longitude'] ?>], {
            icon: greenIcon
        }).bindPopup("<b><?= $eks['nama_prshn'] ?></b><br>" + "Alamat: <?= $eks['desa'] ?>, <?= $eks['kecamatan'] ?><br>" + "Komoditi: <?= $eks['komoditi'] ?><br>" + "Jenis Perusahaan: <?= $eks['jenis_prshn'] ?><br>" + "Skala Perusahan: <?= $eks['skala_prshn'] ?>").addTo(ekspor);
    <?php endforeach; ?>
    var map = L.map('map', {
        center: [-7.8014684, 110.3626157],
        zoom: 15,
        layers: [peta1, ikm],
    });
    var baseLayers = {
        'Default': peta1,
        'Satellite': peta2,
    };
    var overlayMaps = {
        'Sentra IKM': ikm,
        'Eksportir': ekspor,
        'Pasar Rakyat': market,
    };
    var layerControl = L.control.layers(baseLayers, overlayMaps).addTo(map);
    //GEOJSON
    $.getJSON("<?= base_url('assets/geojson/KAB_BANTUL.geojson') ?>", function(data) {
        geoLayer = L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: '#8c8c8c',
                    opacity: 1,
                }
            }
        }).addTo(map);
        //MENAMPILKAN INFORMASI WILAYAH SAAT DIKLIK
        geoLayer.eachLayer(function(layer) {
            layer.bindPopup("<b>Kabupaten Bantul</b><br>" + "Jumlah data: <br>" + "Sentra IKM: <b><?= $totIkmBt ?></b><br>" + "Pasar Rakyat: <b><?= $totPasarBt ?></b><br>" + "Eksportir: <b><?= $totEksBt ?></b>");
        })
    });
    $.getJSON("<?= base_url('assets/geojson/KAB_GUNUNGKIDUL.geojson') ?>", function(data) {
        geoLayer = L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: '#8c8c8c',
                    opacity: 1,
                }
            }
        }).addTo(map);
        //MENAMPILKAN INFORMASI WILAYAH SAAT DIKLIK
        geoLayer.eachLayer(function(layer) {
            layer.bindPopup("<b>Kabupaten Gunung Kidul</b><br>" + "Jumlah data: <br>" + "Sentra IKM: <b><?= $totIkmGk ?></b><br>" + "Pasar Rakyat: <b><?= $totPasarGk ?></b><br>" + "Eksportir: <b><?= $totEksGk ?></b>");
        })
    });
    $.getJSON("<?= base_url('assets/geojson/KAB_KULONPROGO.geojson') ?>", function(data) {
        geoLayer = L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: '#8c8c8c',
                    opacity: 1,
                }
            }
        }).addTo(map);
        //MENAMPILKAN INFORMASI WILAYAH SAAT DIKLIK
        geoLayer.eachLayer(function(layer) {
            layer.bindPopup("<b>Kabupaten Kulon Progo</b><br>" + "Jumlah data: <br>" + "Sentra IKM: <b><?= $totIkmKp ?></b><br>" + "Pasar Rakyat: <b><?= $totPasarKp ?></b><br>" + "Eksportir: <b><?= $totEksKp ?></b>");
        })
    });
    $.getJSON("<?= base_url('assets/geojson/KAB_SLEMAN.geojson') ?>", function(data) {
        geoLayer = L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: '#8c8c8c',
                    opacity: 1,
                }
            }
        }).addTo(map);
        //MENAMPILKAN INFORMASI WILAYAH SAAT DIKLIK
        geoLayer.eachLayer(function(layer) {
            layer.bindPopup("<b>Kabupaten Sleman</b><br>" + "Jumlah data: <br>" + "Sentra IKM: <b><?= $totIkmSl ?></b><br>" + "Pasar Rakyat: <b><?= $totPasarSl ?></b><br>" + "Eksportir: <b><?= $totEksSl ?></b>");
        })
    });
    $.getJSON("<?= base_url('assets/geojson/KOTA_YOGYAKARTA.geojson') ?>", function(data) {
        geoLayer = L.geoJSON(data, {
            style: function(feature) {
                return {
                    color: '#8c8c8c',
                    opacity: 1,
                }
            }
        }).addTo(map);
        //MENAMPILKAN INFORMASI WILAYAH SAAT DIKLIK
        geoLayer.eachLayer(function(layer) {
            layer.bindPopup("<b>Kota Yogyakarta</b><br>" + "Jumlah data: <br>" + "Sentra IKM: <b><?= $totIkmYk ?></b><br>" + "Pasar Rakyat: <b><?= $totPasarYk ?></b><br>" + "Eksportir: <b><?= $totEksYk ?></b>");
        })
    });
</script>