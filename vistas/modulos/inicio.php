  
 
 
 <!-- Main content -->
    <section class="content">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Home</a></li>
              <li class="breadcrumb-item active">inicio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      
    </section>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

<!--
    

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/vistas/dist/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="vistas/dist/css/font-awesome.css">

    <link rel="stylesheet" href="vistas/dist/css/templatemo-klassy-cafes.css">

    <link rel="stylesheet" href="vistas/dist/css/owl-carousel.css">

    <link rel="stylesheet" href="vistas/dist/css/lightbox.css">

<!-- Título Centrado -->
<div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
    <h1 style="font-size: 2.5rem; font-weight: bold; color: #333;">¡StoryMap!</h1>
</div>
  
      
    <!-- Main content -->
    <section class="content">
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>México</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 600px;
            width: 80%;
            margin: 20px auto;
            border: 2px solid #333;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h2>México</h2>
    <div id="map"></div>

    <script>
        var map = L.map('map').setView([23.6345, -102.5528], 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var estados = {
            "Aguascalientes": { coords: [21.8853, -102.2916], url: "aguascalientes.html" },
            "Baja California": { coords: [30.8406, -115.2838], url: "bajacalifornia.html" },
            "Baja California Sur": { coords: [26.0444, -111.6661], url: "bajacaliforniasur.html" },
            "Campeche": { coords: [19.8301, -90.5349], url: "campeche.html" },
            "Chiapas": { coords: [16.7569, -93.1292], url: "chiapas.html" },
            "Chihuahua": { coords: [28.632996, -106.0691], url: "chihuahua.html" },
            "Coahuila": { coords: [27.0587, -101.7068], url: "coahuila.html" },
            "Colima": { coords: [19.2452, -103.7241], url: "colima.html" },
            "Durango": { coords: [24.5593, -104.6588], url: "durango.html" },
            "CDMX": { coords: [19.4326, -99.1332], url: "cdmx.html" },
            "Guanajuato": { coords: [21.019, -101.2574], url: "guanajuato.html" },
            "Guerrero": { coords: [17.4392, -99.5451], url: "guerrero.html" },
            "Hidalgo": { coords: [20.0911, -98.7624], url: "hidalgo.html" },
            "Jalisco": { coords: [20.6597, -103.3496], url: "jalisco.html" },
            "México": { coords: [19.35, -99.75], url: "mexico.html" },
            "Michoacán": { coords: [19.5665, -101.7068], url: "michoacan.html" },
            "Morelos": { coords: [18.6813, -99.1013], url: "morelos.html" },
            "Nayarit": { coords: [21.7514, -104.8455], url: "nayarit.html" },
            "Nuevo León": { coords: [25.6751, -100.3185], url: "nuevoleon.html" },
            "Oaxaca": { coords: [17.0732, -96.7266], url: "oaxaca.html" },
            "Puebla": { coords: [19.0414, -98.2063], url: "puebla.html" },
            "Querétaro": { coords: [20.5888, -100.3899], url: "queretaro.html" },
            "Quintana Roo": { coords: [19.1817, -88.4791], url: "quintanaroo.html" },
            "San Luis Potosí": { coords: [22.1565, -100.9855], url: "sanluispotosi.html" },
            "Sinaloa": { coords: [25.1721, -107.4795], url: "sinaloa.html" },
            "Sonora": { coords: [29.0729, -110.9559], url: "sonora.html" },
            "Tabasco": { coords: [17.8409, -92.6189], url: "tabasco.html" },
            "Tamaulipas": { coords: [24.2669, -98.8363], url: "tamaulipas.html" },
            "Tlaxcala": { coords: [19.3139, -98.2404], url: "tlaxcala.html" },
            "Veracruz": { coords: [19.1738, -96.1342], url: "veracruz.html" },
            "Yucatán": { coords: [20.974, -89.6263], url: "yucatan.html" },
            "Zacatecas": { coords: [22.7709, -102.5832], url: "zacatecas.html" }
        };

        for (var estado in estados) {
            let info = estados[estado];
            L.marker(info.coords, { title: estado }).addTo(map)
                .bindPopup(`<b>${estado}</b><br><a href='${info.url}'>Ver más</a>`)
                .on('click', function () {
                    window.location.href = info.url;
                });
        }
    </script>
</body>
</html>

     
      </div>
      <!-- /.card -->