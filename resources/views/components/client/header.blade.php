<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-bar-info list-inline-item pl-0 mb-0">
                        <li class="list-inline-item"><a href="mailto:{{$alamat->email ?? ''}}"><i
                                    class="icofont-support-faq mr-2"></i>{{$alamat->email ?? ''}}</a></li>
                        <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>{{$alamat->alamat ?? ''}}
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                        <a href="tel:+{{$alamat->nomor_hp ?? ''}}">
                            <span>Call Now : </span>
                            <span class="h4">{{$alamat->nomor_hp ?? ''}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <h3>{{$nama->nama_aplikasi ?? config('app.name')}}</h3>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Beranda</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('tentang')}}">Tentang Kami</a></li>
                    <li class="nav-item">
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu">
                            @forelse($kategori as $k)
                            <a class="dropdown-item" href="{{route('kate', $k->kategori)}}">{{$k->kategori}}</a>
                            @empty
                            <a class="dropdown-item" href="#">Tidak Ada Data</a>
                            @endforelse
                        </div>
                    </li> --}}

                    </li>
                     <li class="nav-item"><a class="nav-link" href="{{route('semua_berita')}}">Berita</a></li>
                     <li class="nav-item"><a class="nav-link" href="https://api.whatsapp.com/send?phone={{$alamat->nomor_hp ?? ''}}&text=Halo%20Saya%20Ingin%20Menyampaikan%20Berita%20Nih">Kontak</a></li>

                    @Auth
                    <li class="nav-item"><a class="nav-link" href="{{url('/home')}}">Dashboard</a></li>
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
                    @endguest
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
