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
                                <h4>Daftar Berita</h4>
                            </div>
                            <div class="card-body table-responsive">
                           
                                <button class="btn btn-outline-success btn-block mb-4" data-toggle="modal"
                                    data-target="#tambahBerita">Tambah Berita</button>

                                <table class="table mt-5" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Tag</th>
                                            <th>Kategori</th>
                                            <th>Viewer</th>
                                            <th>Tanggal Upload</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data as $berita)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$berita->judul}}</td>
                                            <td>{{$berita->tag}}</td>
                                            <td>{{$berita->kategori}}</td>
                                            <td>{{$berita->viewer}}</td>
                                            <td>{{$berita->created_at->format('d F Y')}}</td>
                                            <td>
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                                    id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                                    Option
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="{{route('edit_berita', $berita->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('hapus_berita', $berita->id)}}">Hapus</a>
                                                </div>


                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Berita</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <button class="btn btn-outline-success btn-block mb-4" data-toggle="modal"
                                    data-target="#tambahTag">Tambah Tag</button>

                                <table class="table mt-3" id="table_tag">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tag</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @php $no1 = 1; @endphp
                                      @foreach($data2 as $tag)
                                      <tr>
                                        <td>{{$no1++}}</td>
                                        <td>{{$tag->tag}}</td>
                                        <td>
                                          <a href="{{route('hapus_tag', $tag->id)}}" class="btn btn-outline-danger">Hapus</a>
                                        </td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Daftar Kategori</h4>
                            </div>
                            <div class="card-body table-responsive">
                                <button class="btn btn-outline-success btn-block mb-4" data-toggle="modal"
                                    data-target="#tambahKategori">Tambah Kategori</button>

                                <table class="table mt-3" id="table_tag">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Link</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @php $no1 = 1; @endphp
                                      @foreach($kategori as $kate)
                                      <tr>
                                        <td>{{$no1++}}</td>
                                        <td>{{$kate->kategori}}</td>
                                        <td><a href="{{$kate->link}}" target="_blank">{{$kate->link}}</a></td>
                                        <td>
                                          <a href="{{route('hapus_kategori', $kate->id)}}" class="btn btn-outline-danger">Hapus</a>
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
        <div class="modal fade" id="tambahBerita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_berita')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                          <div class="form-group">
                                <label>Gambar Berita</label>
                                <input type="file" class="form-control-file" name="gambar_berita">
                            </div>
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Berita">
                            </div>
                            <div class="form-group">
                                <label>Tag Berita</label>
                                <select name="tag" class="form-control" id="">
                                  <option disabled selected value>Pilih Tag Berita</option>
                                  @foreach($data2 as $datatag)
                                    <option value="{{$datatag->tag}}">{{$datatag->tag}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Berita</label>
                                <select name="kategori" class="form-control" id="">
                                  <option disabled selected value>Pilih Kategori Berita</option>
                                  @foreach($kategori as $datakateg)
                                    <option value="{{$datakateg->kategori}}">{{$datakateg->kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sub Isi</label>
                                <textarea name="sub" class="form-control" cols="30" rows="10" placeholder="Rangkuman Isi Berita"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Isi Berita</label>
                                <textarea name="isi" id="edit1" class="form-control" cols="30" rows="10"></textarea>
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


        <div class="modal fade" id="tambahTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tag</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_tag')}}" method="post">
                        @csrf

                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tag</label>
                                <input type="text" class="form-control" name="tag" placeholder="Tag">
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


        
        <div class="modal fade" id="tambahKategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_kategori')}}" method="post">
                        @csrf

                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tag</label>
                                <input type="text" class="form-control" name="kategori" placeholder="Tag">
                            </div>
                            <div class="form-group">
                                <label>Link Sumber</label>
                                <input type="text" class="form-control" name="link" placeholder="Tag">
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
    </div>
</div>
<x-dcore.script />
