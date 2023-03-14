<div class="row">
    <div class="col-sm-8">
        <div id="map" style="width: 100%; height: 500px;"></div>
    </div>
    <div class="col-sm-4">
        <?php
        //NOTIFIKASI BERHASIL INPUT
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success">';
            echo $this->session->flashdata('pesan');
            echo '</div>';
        }
        ?>
        <?php echo form_open('gis/ubah') ?>
        <input type="hidden" name="id" value="<?= $ikm['id_lokasi']; ?>">
        <div class="form-group">
            <label for="">Location Name</label>
            <input class="form-control" name="nama_lokasi" placeholder="Location Name" value="<?= $ikm['nama_lokasi']; ?>">
        </div>
        <div class="form-text"><?= form_error('nama_lokasi') ?></div>
        <div class="form-group">
            <label for="">Latitude</label>
            <input class="form-control" name="latitude" id="Latitude" placeholder="Latitude" value="<?= $ikm['latitude']; ?>">
        </div>
        <div class="form-text"><?= form_error('latitude') ?></div>
        <div class="form-group">
            <label for="">Longitude</label>
            <input class="form-control" name="longitude" id="Longitude" placeholder="Longitude" value="<?= $ikm['longitude']; ?>">
        </div>
        <div class="form-text"><?= form_error('longitude') ?></div>
        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
        <?php echo form_close() ?>
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
        zoom: 13,
        layers: [peta1],
    });
    var baseLayers = {
        'Default': peta1,
        'Satelite': peta2,
        'Street': peta3,
        'Dark': peta4,
    };
    var layerControl = L.control.layers(baseLayers).addTo(map);
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