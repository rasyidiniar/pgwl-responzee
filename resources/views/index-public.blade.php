@extends('layouts.template')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0%;




        }

        #landing-page {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;

        }

        #landing-page h1 {
            color: white;
            font-size: 4rem;
            z-index: 1;
        }

        #landing-page button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            transition: background-color 0.3s;
        }

        #landing-page button:hover {
            background-color: #ddd;
        }
    </style>
@endsection

@section('content')
    <div id="landing-page">
        <div>
            <h1>Website GIS</h1>
            <h1>BUDAYA KIRAB GREBEG SUDIRO DI SURAKARTA</h1>
            <button onclick="hideLandingPage()">Enter Site</button>
        </div>
    </div>

    <div id="map"></div>
@endsection

@section('script')
    <script>
        function hideLandingPage() {
            document.getElementById('landing-page').style.display = 'none';
        }

        var map = L.map('map').setView([-7.569123810325685, 110.83139813231004], 16);

        //Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        /* GeoJSON Point */
        var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<div style='text-align:center'>" +
                    "<strong>" + feature.properties.name + "</strong></div><br>" +
                    "<div style='text-align:justify'>" +
                    feature.properties.description + "</div><br>" +
                    "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail'alt='...'>" +
                    "<br>"
                ;

                layer.on({
                    click: function(e) {
                        point.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        point.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.points') }}", function(data) {
            point.addData(data);
            map.addLayer(point);
        });

        /* GeoJSON Polyline */
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<div style='text-align:center'>" +
                    "<strong>" + feature.properties.name + "</strong></div><br>" +
                    "<div style='text-align:justify'>" +
                    feature.properties.description + "</div><br>" +
                    "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail'alt='...'>" +
                    "<br>"

                layer.on({
                    click: function(e) {
                        polyline.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });

        /* GeoJSON Polygon */
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<div style='text-align:center'>" +
                    "<strong>" + feature.properties.name + "</strong></div><br>" +
                    "<div style='text-align:justify'>" +
                    feature.properties.description + "</div><br>" +
                    "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail'alt='...'>" +
                    "<br>"

                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });

        //Layer Control
        var overlayMaps = {
            "Point": point,
            "Polyline": polyline,
            "Polygon": polygon
        };

        var layerControl = L.control.layers(null, overlayMaps, {
            collapsed: false
        }).addTo(map);
    </script>
@endsection
