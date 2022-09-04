<x-client.head />

<body id="top">
    <x-client.header :alamat="$alamat"  :kategori="$kategori" :nama="$nama" />
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
                        <span class="text-white">Kontak</span>
                        <h1 class="text-capitalize mb-5 text-lg">Hubungi Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card {
            background: rgb(238, 174, 202);
            background: radial-gradient(circle, rgba(238, 174, 202, 1) 0%, rgba(205, 158, 187, 1) 0%, rgba(90, 122, 186, 1) 100%, rgba(38, 106, 186, 1) 100%);
        }

    </style>
    <section class="section service-2">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
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
					
                </div>
                
                <div class="col-md-12 mt-4">
                    <div class="row">
                        
                        <div class="col-md-6 mt-3">
                        <a href="mailto:{{$alamat->email ?? ''}}" class="btn btn-danger btn-block w-100"><i class="fas fa-facebook"></i> Chat Email <i class="icofont-email"></i></a>
                        </div>
                        <div class="col-md-6 mt-3">
                        <a href="https://api.whatsapp.com/send?phone={{$alamat->nomor_hp ?? ''}}&text=Halo%20Saya%20Ingin%20Menyampaikan%20Berita%20Nih" class="btn btn-success btn-block w-100"><i class="fas fa-facebook"></i> Chat Whatsapp <i class="icofont-whatsapp"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    <x-client.footer :tentang="$tentang" :nama="$nama" :desa="$desa" :alamat="$alamat" />


    <!-- 
    Essential Scripts
    =====================================-->


    <x-client.script />


</body>

</html>
