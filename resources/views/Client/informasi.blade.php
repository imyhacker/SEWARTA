<x-client.head />

<body id="top">
    <x-client.header :alamat="$alamat" :nama="$nama" />
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
                        <h1 class="text-capitalize mb-5 text-lg">Semua Informasi</h1>
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
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            @foreach($info as $f)
                            <div class="col-md-6 mt-4">
                                <a href="{{route('baca_info', $f->id)}}">

                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title text-white">{{$f->judul}}</h5>
                                        <p class="card-text">
                                            Kategori : <span class="badge badge-success">{{$f->kategori}}</span><br>
                                            <small> Di Upload : <span
                                                    class="badge badge-success">{{$f->created_at->diffForHumans()}}</span></small><br>
                                            <small> Di Update : <span
                                                    class="badge badge-success">{{$f->updated_at->diffForHumans()}}</span></small>
                                        </p>
                                        <p></p>
                                        <p class="card-text">{!! Str::limit($f->isi, 100, '...') !!}</p>
                                    </div>
                                </div>
                            </a>

                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                        <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                            <div class="sidebar-widget latest-post mb-3">
                                <h5>Popular Posts</h5>

                                @foreach($info as $post)
                                <div class="py-2">
                                    <span class="text-sm text-muted">{{$post->created_at->format("l, m d")}}</span>
                                    <h6 class="my-2"><a href="{{route('baca', $post->id)}}">{{$post->judul}}</a></h6>
                                </div>
                                @endforeach

                            </div>

                            <div class="sidebar-widget tags mb-3">
                                <h5 class="mb-4">Tags</h5>
                                @foreach($kateg as $tg)

                                <a href="#">{{$tg->kategori}}</a>
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
