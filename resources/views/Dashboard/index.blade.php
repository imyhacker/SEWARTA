<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <x-dcore.alert />
      <div class="main-content">
        <section class="section">
        <x-dcore.card />

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Hai {{Auth::user()->name}}</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                      <h3>{{$aplikasi->nama_aplikasi ?? config('app.name')}} - {{$nama_desa->desa ?? 'Belum Ada Desa'}}</h3>
                    </div>
                    <div class="col-md-12">
                      <table class="table table-bordered">
                        <tr>
                          <th>Alamat Lengkap</th>
                          <td>:</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Alamat Email</th>
                          <td>:</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Nomor HandPhone</th>
                          <td>:</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Tentang Kami</th>
                          <td>:</td>
                          <td>asd</td>
                        </tr>
                      </table>
                    </div>
                  </div>
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