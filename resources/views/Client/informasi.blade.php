<x-client.head />

<body id="top">
    <x-client.header :alamat="$alamat"  :nama="$nama" />
    <style>
        .bg-1 {
            background: url("{{asset('depan/depan.jpg')}}") no-repeat 50% 50%;
            background-size: cover;
            position: relative;
        }

    </style>
  
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Informasi</span>
          <h1 class="text-capitalize mb-5 text-lg">Semua Informasi</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row">
            @foreach($info as $if)
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					<img src="{{asset('gambar_informasi/'.$if->gambar_informasi)}}" alt="" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{$if->judul}}</h4>
						<p class="mb-4">{!! Str::limit($if->isi, 30, '...') !!}</p>
						<a href="{{route('baca_info', $if->id)}}" class="read-more">Selengkapnya  <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
            @endforeach
		
		</div>
	</div>
</section>


    <x-client.footer :tentang="$tentang" :nama="$nama" :desa="$desa" :alamat="$alamat" />


    <!-- 
    Essential Scripts
    =====================================-->


    <x-client.script />


</body>

</html>
