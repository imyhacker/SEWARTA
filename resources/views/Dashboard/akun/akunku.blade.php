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
                                <h4>Akunku</h4>
                            </div>
                            <form action="{{route('update_akun')}}" method="POST">
                                @csrf
                            <div class="card-body table-responsive">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="name" value="{{$data->name}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email Aktif</label>
                                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$data->email}}">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Password </label>
                                        <input type="password" class="form-control" placeholder="Password Min. 8" name="password">
                                    </div>
                                    <div class="col-md-12 mt-3 mb-5">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>

                                <ul>
                                    <li>Harus Update Semua Jika Ingin Perubahan</li>
                                </ul>
                            </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
        <!-- Modal -->

<x-dcore.script />
