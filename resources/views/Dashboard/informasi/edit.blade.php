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
                  <h4>Edit Informasi</h4>
                </div>
                <form action="{{route('update_informasi', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                <div class="card-body">
                    <div class="form-group">
                        <label>Gambar Informasi</label>
                        <input type="file" name="gambar_informasi" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label>Judul Informasi</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul Informasi" value="{{$data->judul}}">
                    </div>
                    <div class="form-group">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control">
                                    <option disabled selected value>Pilih Kategori</option>
                                    @foreach($kateg as $ktg)
                                    <option value="{{$ktg->kategori}}" @if($data->kategori == $ktg->kategori) selected @endif>{{$ktg->kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                    <div class="form-group">
                        <label>Isi Informasi</label>
                        <textarea name="isi" class="form-control" id="edit3" cols="30" rows="10">{{$data->isi}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-outline-success" value="Update Informasi">
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