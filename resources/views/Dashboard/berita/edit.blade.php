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
                                <h4>Edit Berita</h4>
                            </div>
                            <form action="{{route('update_berita', $data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Gambar Berita</label>
                                    <input type="file" class="form-control-file" name="gambar_berita">
                                </div>
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" placeholder="Judul Berita"
                                        value="{{$data->judul}}" name="judul">
                                </div>
                                <div class="form-group">
                                    <label>Tag Berita</label>

                                    <select name="tag" class="form-control" id="">
                                        <option disabled selected value>Pilih Tag</option>
                                        @foreach($tag as $datatag)
                                        <option value="{{$datatag->tag}}" @if($data->tag == $datatag->tag) selected
                                            @endif >{{$datatag->tag}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <textarea name="isi" id="edit2" class="form-control" cols="30"
                                        rows="10">{{$data->isi}}</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-outline-success btn-block" value="Update Data">
                                </div>
                            </div>
                            </form>
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
