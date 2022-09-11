<!-- Slider Start -->
<style>
	
.banner {
  position: relative;
  overflow: hidden;
  background: #fff;
  background: url("{{url('/depan/depan.jpg')}}") no-repeat;
  background-size: cover;
  min-height: 550px;
}
</style>

<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">Informasi Desa {{$desa->desa ?? "Belum ada nama desa"}}</span>
					<h1 class="mb-3 mt-3">{{$nama->nama_aplikasi ?? config('app.name')}}</h1>
					
					<p class="mb-4 pr-5">Membuat Berita ?</p>
					<div class="btn-container mt-3">
						<a href="https://api.whatsapp.com/send?phone={{$alamat->nomor_hp ?? ''}}/&text=Halo%20Saya%20Ingin%20Menyampaikan%20Berita" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Klik Disini<i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>