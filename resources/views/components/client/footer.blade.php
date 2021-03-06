<!-- footer Start -->
<footer class="footer section gray-bg mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <h3>{{$nama->nama_aplikasi ?? config('app.name')}}</h3>
                    </div>
                    <style>
						.iframe-container{
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
}
.iframe-container > *{
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
}

					</style>
					<div class="iframe-container">
						<iframe src="https://maps.google.com/maps?q=Tegalurung&t=k&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Hubungi Kami</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <span class="h6 mb-0">Support Available for 24/7</span>
                        </div>
                        <h4 class="mt-2"><a
                                href="mailto:{{$alamat->email ?? '#'}}">{{$alamat->email ?? 'Belum ada email'}}</a></h4>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                        </div>
                        <h4 class="mt-2"><a
                                href="tel:+{{$alamat->nomor_hp ?? '#'}}">+{{$alamat->nomor_hp ?? 'Belum ada nomor hp'}}</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="copyright">
                        &copy; Copyright Reserved to <span class="text-color">AMIK PN</span>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
