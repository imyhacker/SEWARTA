<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">E-WARTA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="{{url('/home')}}">Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">E-WARTA</li>
 
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Komponen
                        Jurnal</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-lin beep beep-sidebar" href="{{route('berita')}}">Berita</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{route('informasi')}}">Informasi</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{route('laporan')}}">Laporan</a></li>

                </ul>
            </li>

            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Setting</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" data-toggle="modal" href="#" data-target="#namaAplikasi" type="button">Nama
                            Aplikasi</a></li>
                    <li><a class="nav-link" data-toggle="modal" href="#" data-target="#kontakAplikasi"
                            type="button">Kontak Aplikasi</a></li>
                    <li><a class="nav-link" data-toggle="modal" href="#" data-target="#tentangKami"
                            type="button">Tentang Kami</a></li>
                    <li><a class="nav-link" data-toggle="modal" href="#" data-target="#namaDesa" type="button">Nama
                            Desa</a></li>
                </ul>
            </li>

            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Akun</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link beep beep-sidebar" href="{{route('semua_akun')}}">Semua Data Akun</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{route('akunku')}}">Akun Saya</a></li>
                    
                </ul>
            </li>
        </ul>

       
    </aside>
</div>


<!-- Modal -->
<div class="modal fade" id="namaAplikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nama Aplikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload_nama_aplikasi')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Nama Aplikasi</label>
                            <input type="text" name="nama_aplikasi" class="form-control" placeholder="Nama Aplikasi">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="kontakAplikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kontak Aplikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload_alamat')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">

                        <label>Alamat Lengkap</label>
                        <textarea name="alamat" class="form-control"></textarea>

                    </div>
                    <div class="form-group">

                        <label>Nomor Hp</label>
                        <input type="number" class="form-control" name="nomor_hp" placeholder="62xxxxxxxxx">
                    </div>
                    <div class="form-group">

                        <label>Alamat Email</label>
                        <input type="email" class="form-control" name="email" placeholder="xxx@mail.com">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="tentangKami" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tentang Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload_tentang')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">

                        <label>Gambar Background</label>
                        <input type="file" name="gambar_tentang" class="form-control-file" id="">

                    </div>
                    <div class="form-group">

                        <label>Isi</label>
                        <textarea name="isi" id="editor1" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="namaDesa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nama Desa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('upload_desa')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Desa</label>
                        <input type="text" class="form-control" placeholder="Nama Desa" name="desa">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
    </div>
</div>
