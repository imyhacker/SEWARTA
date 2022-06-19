<x-client.head />
<body id="top">
<x-client.header :alamat="$alamat"/>
<x-client.banner :tentang="$tentang" :nama="$nama" :desa="$desa"/>
<x-client.fitur :tentang="$tentang" :nama="$nama" :tb="$tb" :ti="$ti" :desa="$desa"/>
<x-client.about :tentang="$tentang" :nama="$nama" :desa="$desa"/>
<x-client.cta  :tb="$tb" :ti="$ti"/>

<x-client.footer :tentang="$tentang" :nama="$nama" :desa="$desa" :alamat="$alamat"/>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

  </body>
  </html>
   