<x-client.head />
<body id="top">
<x-client.header :alamat="$alamat"/>
<style>
    .bg-1 {
  background: url("{{asset('depan/depan.jpg')}}") no-repeat 50% 50%;
  background-size: cover;
  position: relative;
}
</style>
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Tentang Kami</span>
          <h1 class="text-capitalize mb-5 text-lg">Tentang Kami</h1>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h2 class="title-color">Siapa Kami ? Dan Apa Visi Misi Kami</h2>
			</div>
			<div class="col-lg-8">
				<p>{!! $tentang->tentang !!}</p>
			</div>
		</div>
	</div>
</section>


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
   