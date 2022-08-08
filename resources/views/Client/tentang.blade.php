<x-client.head />
<body id="top">
<x-client.header :alamat="$alamat" :kategori="$kategori" :nama="$nama" />
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
				<p>{!! $tentang->tentang ?? 'Tidak ada data '!!}</p>
			</div>
		</div>
	</div>
</section>


<x-client.footer :tentang="$tentang" :nama="$nama" :desa="$desa" :alamat="$alamat"/>
   

    <!-- 
    Essential Scripts
    =====================================-->
    <x-client.script />

  </body>
  </html>
   