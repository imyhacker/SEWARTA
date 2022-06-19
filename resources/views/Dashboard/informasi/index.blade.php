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
                                <h4>Informasi</h4>
                            </div>
                            <div class="card-body">
                                <button class="btn btn-block btn-outline-success mb-4" data-toggle="modal"
                                    data-target="#tambahInformasi">Tambah Informasi</button>
                                <table class="table mt-4" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Informasi</th>
                                            <th>Viewer</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($data as $info)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$info->judul}}</td>
                                            <td>{{$info->viewer}}</td>
                                            <td>
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    Option
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{route('edit_informasi', $info->id)}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('hapus_informasi', $info->id)}}">Hapus</a>
                                                </div>
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
        <div class="modal fade" id="tambahInformasi" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('upload_informasi')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Gambar Informasi</label>
                                <input type="file" class="form-control-file" name="gambar_informasi">
                            </div>
                            <div class="form-group">
                                <label>Judul Informasi</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Informasi">
                            </div>
                            <div class="form-group">
                                <label>Isi Informasi</label>
                                <textarea name="isi" class="form-control" id="editor1" cols="30" rows="10"></textarea>
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
