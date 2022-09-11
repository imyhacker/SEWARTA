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
                            <form action="{{route('cari_tanggal_berita')}}" method="GET">
                                <div class="row">
                                    <div class="col-md-6 mt-3">
                                        <label>Tanggal Awal</label>
                                        <input type="date" name="tanggal_awal" class="form-control" require>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                    <label>Tanggal Akhir</label>

                                    <input type="date" name="tanggal_akhir" class="form-control" require>
                                    </div>
                                    <div class="col-md-12 mt-3 mb-4">
                                        <input type="submit" class="btn btn-outline-danger btn-block" value="Cari Data">
                                    </div>
                                </div>
                                </form>
                               

                                <table class="table mt-5" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Tag</th>
                                            <th>Kategori</th>
                                            <th>Sub (Rangkuman)</th>
                                            <th>Viewer</th>
                                            <th>Tanggal Upload</th>
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
                                            <td>{{$berita->sub}}</td>
                                            <td>{{$berita->viewer}}</td>
                                            <td>{{$berita->created_at->format('d F Y')}}</td>
                                            
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
        
    </div>
</div>
<x-dcore.script />
