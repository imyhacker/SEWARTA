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
                        <span class="text-white">Informasi</span>
                        <h1 class="text-capitalize mb-5 text-lg">{{$kateg->kategori}}</h1>
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
                    <div class="container">
                        <div class="row">
                            @foreach($info as $f)
                            <div class="col-lg-6 col-md-12 mb-5">
                                <div class="blog-item">
                                    <div class="blog-item-content">
                                        <div class="blog-item-meta mb-3 mt-4">
                                            <span class="text-black text-capitalize mr-3"><i
                                                    class="icofont-calendar mr-1"></i> {{$f->created_at->diffForHumans()}}</span>
                                                    <span class="text-black text-capitalize mr-3"><i
                                                        class="icofont-tag mr-1"></i>Tag : {{$f->tag}}</span>
                                                        <span class="text-black text-capitalize mr-3"><i
                                                            class="icofont-book-mark mr-1"></i>Kategori : {{$f->kategori}}</span>
                                        </div>
    
                                        <h2 class="mt-3 mb-3"><a href="{{route('baca', $f->id)}}">{{$f->judul}}</a></h2>
    
                                        <p class="mb-4">{{$f->sub}}</p>
    
                                        <a href="{{route('baca', $f->id)}}" target="_blank"
                                            class="btn btn-main btn-icon btn-round-full">Read More <i
                                                class="icofont-simple-right ml-2  "></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

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
