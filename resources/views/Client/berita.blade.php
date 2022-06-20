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
                        <span class="text-white">Berita</span>
                        <h1 class="text-capitalize mb-5 text-lg">Semua Berita</h1>

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
                        @forelse($berita as $br)
                        <div class="col-lg-12 col-md-12 mb-5">
                            <div class="blog-item">
                                <div class="blog-thumb">
                                    <img src="{{asset('gambar_berita/'.$br->gambar_berita)}}" alt="" class="img-fluid ">
                                </div>

                                <div class="blog-item-content">
                                    <div class="blog-item-meta mb-3 mt-4">
                                        <span class="text-black text-capitalize mr-3"><i
                                                class="icofont-calendar mr-1"></i> {{$br->created_at->diffForHumans()}}</span>
                                    </div>

                                    <h2 class="mt-3 mb-3"><a href="{{route('baca', $br->id)}}">{{$br->judul}}</a></h2>

                                    <p class="mb-4">{!! Str::limit($br->isi, '199', '...') !!}</p>

                                    <a href="{{route('baca', $br->id)}}" target="_blank"
                                        class="btn btn-main btn-icon btn-round-full">Read More <i
                                            class="icofont-simple-right ml-2  "></i></a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-lg-12 col-md-12 mb-5">
                            Tidak Ada Berita
                        </div>
                        @endforelse
                    </div>
                </div>
                
               <x-client.side :tag="$tag" :ps="$ps"/>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8">
                    <nav class="pagination py-2 d-inline-block">
                        <div class="nav-links">
                            {{$berita->links()}}
                        </div>
                    </nav>
                </div>
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
