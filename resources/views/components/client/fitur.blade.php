<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="feature-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item mb-5 mb-lg-0">
                                <div class="feature-icon mb-4">
                                    <i class="icofont-ebook"></i>
                                </div>
                                <span>{{$tb}} Total Berita</span>
                                <h4 class="mb-3">Berita Desa {{$desa->desa ?? "Belum ada nama desa"}}</h4>
                                <p class="mb-4">Baca Berita Terupdate Di Desa {{$desa->desa ?? "Belum ada nama desa"}}</p>
                                <a href="{{route('semua_berita')}}" class="btn btn-main btn-round-full">Lihat Semua</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item mb-5 mb-lg-0">
                                <div class="feature-icon mb-4">
                                    <i class="icofont-ebook"></i>
                                </div>
                                <span>{{$ti}} Total Informasi</span>
                                <h4 class="mb-3">Informasi Desa {{$desa->desa ?? "Belum ada nama desa"}}</h4>
                                <p class="mb-4">Baca Informasi Terupdate Di Desa {{$desa->desa ?? "Belum ada nama desa"}}</p>
                                <a href="{{route('semua_informasi')}}" class="btn btn-main btn-round-full">Lihat Semua</a>
                            </div>
                        </div>
                    </div>

<!--
                     <div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
					</div> -->
                </div>
            </div>
        </div>
    </div>
</section>
