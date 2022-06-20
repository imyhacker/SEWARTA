<x-client.head />

<body id="top">
    <x-client.header :alamat="$alamat"  :nama="$nama" />
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
                        <span class="text-white">Berita : </span>
                        <h1 class="text-capitalize mb-5 text-lg">{{$berita->judul}}</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="{{asset('gambar_berita/'.$berita->gambar_berita)}}" alt="" class="img-fluid ">
                                </div>

                                <div class="blog-item-content">
                                    <div class="blog-item-meta mb-3 mt-4">
                                        <span class="text-black text-capitalize mr-3"><i
                                                class="icofont-calendar mr-1"></i> {{$berita->created_at->diffForHumans()}}</span>
                                    </div>

                                    <h2 class="mt-3 mb-3">{{$berita->judul}}</h2>

                                    <p class="mb-4 text-justify">{!! $berita->isi !!}</p>

                                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <a href="http://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank" class="btn btn-outline-info btn-block w-100"><i class="fas fa-share-alt"></i> Share Facebook <i class="icofont-share"></i></a>
                        </div>
                        <div class="col-md-4 mt-3">
                        <a href="mailto:?Subject=Ada Yang Baru Nih&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 {{url()->current()}}" class="btn btn-outline-danger btn-block w-100"><i class="fas fa-facebook"></i> Share Email <i class="icofont-share"></i></a>
                        </div>
                        <div class="col-md-4 mt-3">
                        <a href="https://api.whatsapp.com/send?text=Ada Yang Baru Nih, Yuk Lihat Di Link Berikut {{url()->current()}}" class="btn btn-outline-success btn-block w-100"><i class="fas fa-facebook"></i> Share Whatsapp <i class="icofont-share"></i></a>

                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
               <x-client.side :tag="$tag" :ps="$ps"/>
            </div>

            
        </div>
    </section>


    <x-client.footer :tentang="$tentang" :nama="$nama" :desa="$desa" :alamat="$alamat" />


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>

</body>

</html>
