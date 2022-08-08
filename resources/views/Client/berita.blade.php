<x-client.head />

<body id="top">
    <x-client.header :alamat="$alamat" :kategori="$kategori"  :nama="$nama" />
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
    <x-client.script />

</body>

</html>
