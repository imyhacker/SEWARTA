<x-client.head />
<body id="top">
<x-client.header :alamat="$alamat" :kategori="$kategori" :nama="$nama" />
<x-client.banner :tentang="$tentang" :nama="$nama" :desa="$desa"/>
<x-client.fitur :tentang="$tentang" :nama="$nama" :tb="$tb" :ti="$ti" :desa="$desa"/>
<x-client.about :tentang="$tentang" :nama="$nama" :desa="$desa"/>
<x-client.cta  :tb="$tb" :ti="$ti"/>

<x-client.footer :tentang="$tentang" :nama="$nama" :desa="$desa" :alamat="$alamat"/>
   

    <!-- 
    Essential Scripts
    =====================================-->
<x-client.script />

  </body>
  </html>
   