{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Keterangan Usaha/Dagang</title>
    <style>
      *{
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
      }
      body {
        width: 793px;
        height: 1200px;
      }
      .header{
        font-size: 2rem;
        text-align: center;
        font-family: 'Times New Roman', Times, serif
      }
      .judulsurat{
        text-align: center;
        font-size: 1.6rem;
        text-decoration: underline;
        margin-top: 2rem;
      }
      .nomorsurat {
        text-align: center;
        font-size: 1.2rem
      }
      .memerintahkan {
        text-align: center;
        font-size: 1.4rem;
        text-decoration: underline;
        margin-top: 1.5rem;
      }
      .kopsurat {
        padding-top: 2rem;
      }
      #logo {
        float: left;
      }
      table {
        font-size: 1.2rem;
      }
    </style>
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 kopsurat">
          <img src="{{ asset('assets/dashboard/img/karawang.png') }}" width="90px" id="logo">
          <h2 class="header">Pemerintah Daerah Kabupaten Karawang<br>Desa Payungsari</h2>
          <p style="text-align: center;">Jl Raya Sungaibuntu Desa Payungsari Kec.Pedes Kab.Karawang - Jawa Barat 41353<br>
          Email : payungsarides@gmail.com</p>
        </div>
        <hr class="border border-dark border-2 opacity-50">
      </div>
      <h1 class="judulsurat">SURAT KETERANGAN USAHA/DAGANG</h1>
      <p class="nomorsurat">Nomor : {{ $q->nomor_surat }}</p>
      <table style="margin-top: 1rem;">
        <td>Yang bertanda tangan dibawah ini Kepala Desa Payungsari Kec.Pedes Kab.Karawang <br>menerangkan bahwa :</td>
      </table>
      <table style="margin-top: 1rem">
        <tr>
          <td width="180px">Nama</td>
          <td width="20px">:</td>
          <td>{{ $q->nama }}</td>
        </tr>
        <tr>
          <td>NIK</td>
          <td>:</td>
          <td>{{ $q->nik }}</td>
        </tr>
        <tr>
          <td>Tempat,Tgl Lahir</td>
          <td>:</td>
          <td>{{ $q->ttl }}</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>{{ $q->jenis_kelamin }}</td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td>Belum Bekerja</td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td>ISLAM</td>
        </tr>
        <tr>
          <td>Status Perkawinan</td>
          <td>:</td>
          <td>{{ $q->status_perkawinan }}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>{{ $q->alamat }}<br>Desa Payungsari Kecamatan Pedes Kabupaten Karawang</td>
        </tr>
      </table>
      <table style="margin-top: 1rem;">
        <td>Adalah warga Desa Payungsari Kecamatan Pedes Kabupaten Karawang dengan alamat  <br>tinggal sebagaimana tersebut di atas.<br>
          Menurut pengetahuan/ penelitian Kami orang tersebut benar sebagai pengusaha :<br>
        </td>
      </table>

      <table style="margin-top: 1rem">
        <tr>
          <td width="180px">Nama Perusahaan</td>
          <td width="20px">:</td>
          <td>{{ $q->nama_usaha }}</td>
        </tr>
        <tr>
          <td>Jenis Usaha</td>
          <td>:</td>
          <td>{{ $q->jenis_usaha }}</td>
        </tr>
          <td>Alamat Usaha</td>
          <td>:</td>
          <td>{{ $q->alamat_usaha }}<br>Desa Payungsari Kecamatan Pedes Kabupaten Karawang</td>
        </tr>
        <tr>
          <td>Mulai Usaha</td>
          <td>:</td>
          <td>{{ $q->mulai_usaha }}</td>
        </tr>
      </table>

      <table style="margin-top: 1rem;">
        <td>
          Demikian surat keterangan ini kami buat dengan sebenarnya, agar yang berkepentingan <br>
          menjadi tahu dan untuk di pergunakan sebagaimana mestinya.
        </td>
      </table>

      <table style="margin-top: 3rem;margin-left:26rem;text-align:center;">
        <tr><td>Payungsari, 10 Agustus 2023</td></tr>
        <tr><td>Kepala Desa Payungsari</td></tr>
        <br><br><br>
        <tr><td>Ahmad Satibi,S.Sos</td></tr>
      </table>

    </div>
  </body>
</html> --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surat Keterangan Desa Domisili</title>
    <style>
      *{
        font-family: 'Times New Roman';
        margin: 0;
        padding: 0;
      }
      body {
        width: 793px;
        height: 1200px;
        margin: auto;
        font-family: 'Times New Roman';
      }

      .border-judul{
        border-bottom : 4px solid black ;
        font-family: 'Times New Roman';
      }
      .border-judul-1{
        border-bottom : 2px solid black ;
        margin-top: 3px;
        font-family: 'Times New Roman';
      }

      .border-surat{
        border-top:3px solid black ;
        margin-top: ;
        width:69% ;
        margin: -10px auto ; 
        font-family: 'Times New Roman';
      }

      .header{
        font-size: 2rem;
        text-align: center;
        font-family: 'Times New Roman', Times, serif
      }
      .judulsurat{
        text-align: center;
        font-size: 1.6rem;
        font-family: 'Times New Roman';
        margin-top: 2rem;
      }
      .nomorsurat {
        text-align: center;
        font-size: 1.2rem;
        font-family: 'Times New Roman';
      }
      .memerintahkan {
        text-align: center;
        font-size: 1.4rem;
        text-decoration: underline;
        margin-top: 1.5rem;
        font-family: 'Times New Roman';
      }
      .kopsurat {
        padding-top: 2rem;
        font-family: 'Times New Roman';
      }
      #logo {
        float: left;
        font-family: 'Times New Roman';
      }
      table {
        font-size: 1.2rem;
        font-family: 'Times New Roman';
      }

      .validasi{
        margin-left: 450px;
        margin-top: 100px
        font-family: 'Times New Roman';
      }

      .validasi .anak-terakhir{
        padding-bottom: 90px
        font-family: 'Times New Roman';
      }

    </style>
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container mx-auto" >
      <div class="row">
        <div class="col-12 kopsurat text-center">
          <img src="{{ asset('assets/img/header-kop-surat.png') }}" width="100%" id="logo">
        </div>
      
      </div>
      <h1 class="judulsurat">SURAT KETERANGAN USAHA/DAGANG</h1>
      <div class="border-surat"></div>
      <p class="nomorsurat">Nomor : {{ $q->nomor_surat }}</p>
      
      <table style="margin-top: 1rem;">
        <td style="padding: auto 50px"> <p style="text-align: justify">&nbsp; &nbsp; &nbsp;Yang bertanda tangan dibawah ini Kepala Desa Payungsari Kec.Pedes Kab.Karawang menerangkan bahwa :</p></td>
      </table>
      <table style="margin-top: 1rem">
        <tr>
          <td width="180px" style="padding: auto 50px">Nama</td>
          <td width="20px">:</td>
          <td>{{ $q->nama }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">NIK</td>
          <td>:</td>
          <td>{{ $q->nik }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Tempat,Tgl Lahir</td>
          <td>:</td>
          <td>{{ $q->ttl }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Jenis Kelamin</td>
          <td>:</td>
          <td>{{ $q->jenis_kelamin }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Pekerjaan</td>
          <td>:</td>
          <td>Belum Bekerja</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Agama</td>
          <td>:</td>
          <td>ISLAM</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Status Perkawinan</td>
          <td>:</td>
          <td>{{ $q->status_perkawinan }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Alamat</td>
          <td>:</td>
          <td>{{ $q->alamat }}</td>
        </tr>
      </table>
    
      <table style="margin-top: 1rem;">
        <td style="padding: auto 50px; font-family:'Times New Roman', Times, serif;">
          &nbsp; &nbsp; &nbsp;Adalah warga Desa Payungsari Kecamatan Pedes Kabupaten Karawang dengan alamat
          tinggal sebagaimana tersebut di atas. <br>
          &nbsp; &nbsp; &nbsp;Menurut pengetahuan/ penelitian Kami orang tersebut benar sebagai pengusaha :
        </td>
      </table>
      
      <table style="margin-top: 1rem">
        <tr>
          <td width="180px" style="padding: auto 50px">Nama Perusahaan</td>
          <td width="20px">:</td>
          <td>{{ $q->nama }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Jenis Usaha</td>
          <td>:</td>
          <td>{{ $q->nik }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Alamat Usaha</td>
          <td>:</td>
          <td>{{ $q->ttl }}</td>
        </tr>
        <tr>
          <td style="padding: auto 50px">Mulai Usaha</td>
          <td>:</td>
          <td>{{ $q->jenis_kelamin }}</td>
        </tr>
      </table>
      



      <table style="margin-top: 1rem;" >
        <td style="padding: auto 50px; font-family:'Times New Roman', Times, serif;"> <p style="text-align:justify;">&nbsp; &nbsp; &nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya, agar yang berkepentingan
          menjadi tahu dan untuk di pergunakan sebagaimana mestinya.
        </td>
      </table>
     

      <div class="validasi" style="box-sizing: border-box; padding-top:30px;">
        <p>Payungsari, 04 Agustus 2023</p>
        <p>KEPALA DESA PAYUNGSARI</p>
        <p class="anak-terakhir" style="padding-bottom: 70px;">Kasi. Pemerintahan</p>
        <u style="font-weight: 600"> NAUFAL ISKANDAR, S.Pd.I</u>
      </div>

    </div>
  </body>
</html>
