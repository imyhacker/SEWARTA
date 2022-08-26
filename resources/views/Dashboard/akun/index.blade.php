<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <x-dcore.alert />
        <div class="main-content">
            <section class="section">

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Akun Terdaftar Pada Sistem</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                                    Tambah Akun Baru
                                  </button>
                                  
                                <table class="table mt-5" id="table_akun">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Terdaftar pada tanggal</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data as $akun)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$akun->name}}</td>
                                            <td>{{$akun->email}}</td>
                                            <td>{{$akun->created_at->diffForHumans()}}</td>
                                            <td>
                                              <a href="{{route('hapus_akun', $akun->id)}}" class="btn btn-outline-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('tambah_akun')}}" method="POST">
            @csrf
        
        <div class="modal-body">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" placeholder="Nama Lengkap" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Email Aktif</label>
            <input type="email" placeholder="Email Aktif" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password Min. 8" class="form-control" name="password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  
    </div>
</div>
<x-dcore.script />
