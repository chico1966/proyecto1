<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />

        <title>Ciudades Romanas de la Bética</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			#map { 
			  widh: 600px;
			  height: 500px; }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Aplicación</a> <br>
                        <a href="{{ url('/lista_ciudades') }}">Ciudades</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Registro</a>
                    @endif
                </div>
            @endif
 
            <div class="content">
                <div class="title m-b-md">
                    CIUDADES ROMANAS DE LA BÉTICA
                </div><div id="map"></div>
            </div>

            <script>

            var map = L.map('map').
            setView([37.9731, -5.2048],
            7);

            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                maxZoom: 15,
                minZoom: 5
            }).addTo(map);

            L.control.scale().addTo(map);

            L.marker([37.8828, -4.7781],  {draggable: false}).addTo(map).bindTooltip("CORDUBA",{permanent:true}).openTooltip().bindPopup('<img src="img/corduba.jpg" class="img-rounded"><br/><a href="/mostrar_ciudad/1">Datos Corduba</a>');
            L.marker([37.5388, -5.0747],  {draggable: false}).addTo(map).bindTooltip("ASTIGI",{permanent:true}).openTooltip().bindPopup('<img src="img/astigi.jpg" class="img-rounded"><br/><a href="/mostrar_ciudad/2">Datos Astigi</a><br />');
            L.marker([37.294, -6.916],  {draggable: false}).addTo(map).bindTooltip("ONUBA",{permanent:true}).openTooltip().bindPopup('<img src="img/onuba.jpg" class="img-responsive"><br/><a href="/mostrar_ciudad/3">Datos Onuba</a><br />');
            L.marker([37.386, -5.984],  {draggable: false}).addTo(map).bindTooltip("HISPALIS",{permanent:true}).openTooltip().bindPopup('<img src="img/hispalis.jpg" class="img-responsive"><br/><a href="/mostrar_ciudad/4">Datos Hispalis</a><br />');
             <!--Corduba, Astigi, Onuba, Hispalis -->
             </script>


        </div>
    </body>
</html>

{{--  Ejemplos de parámetros de markes
L.marker([37.8828, -4.7781], {title: 'Corduba'}, {draggable: false}).bindPopup('<a href="/mostrar_ciudad/1">Datos Corduba</a><br />Imagen').addTo(map).bindTooltip("CORDUBA").openTooltip();
L.marker([37.5388, -5.0747], {title: 'Astigi'}, {draggable: false}).addTo(map).on("click",function() { window.open('/mostrar_ciudad/2', "_blank");}).bindTooltip("ASTIGI").openTooltip();
L.marker([37.294, -6.916], {title: 'Onuba'}, {draggable: false}).addTo(map).bindTooltip("ONUBA").openTooltip();
L.marker([37.386, -5.984], {title: 'Hispalis'}, {draggable: false}).addTo(map).bindTooltip("HISPALIS",{permanent:true}).openTooltip();
--}}
