
<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="{{asset('gambar_tentang/1.jpg')}}" alt="" class="img-fluid">
					<img src="{{asset('gambar_tentang/1.jpg')}}" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="{{asset('depan/depan.jpg')}}" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">{{$nama->aplikasi ?? config('app.name')}}</h2>
					<p class="mt-4 mb-5">{!! Str::limit($tentang->tentang, 100, '...')!!}</p>

					<a href="service.html" class="btn btn-main-2 btn-round-full btn-icon">Selengkapnya<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>