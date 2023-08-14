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
    <div class="container" style="padding-left:70px;">
      <div class="row">
        <div class="col-12 kopsurat text-center">

          <img src="{{ asset('assets/dashboard/img/Karawang.png') }}" width="111px" id="logo">

          {{-- <h2 class="header"><span style="30px">Pemerintah Daerah Kabupaten Karawang</span><br>Kecamatan Pedes <br> Desa Payungsari</h2> --}}
          <strong style="font-size:25px;">Pemerintahan Daerah Kabupaten Karawang</strong><br>
          <strong style="font-size:24px;">Kecamatan Pedes</strong><br>
          <strong style="font-size:35px;">Desa Payungsari</strong>
          <p style="text-align: center;">Jl Raya Sungaibuntu Desa Payungsari Kec.Pedes Kab.Karawang - Jawa Barat 41353<br>
          Email : payungsarides@gmail.com</p>  
        </div>
        <div class="border-judul"></div>
        <div class="border-judul-1"></div>
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


      <table style="margin-top: 1rem;" >
        <td style="padding: auto 50px; font-family:'Times New Roman', Times, serif;"> <p style="text-align:justify;">&nbsp; &nbsp; &nbsp; Yang bersangkutan adalah warga desa kami yang berlamat tinggal atau berdomisili sebagaimana tersebut diatas. <br>
            &nbsp; &nbsp; &nbsp; Surat Keterangan domisili ini dibuat untuk keperluan {{ $q->keperluan }}. <br>
            &nbsp; &nbsp; &nbsp; Demikian Surat Keterangan Domisili ini kami buat dengan sebenar-benarnya, agar yang berkepentingan menjadi tahu dan dipergunakan sebagaimana mestinya. </p>
        </td>
      </table>
     

      <div class="validasi" style="box-sizing: border-box; padding-top:30px;">
        <p>Payungsari, 04 Agustus 2023</p>
        <p>KEPALA DESA PAYUNGSARI</p>
        <p class="anak-terakhir" style="padding-bottom: 50px;">Kasi. Pemerintahan</p>
        <u style="font-weight: 600"> NAUFAL ISKANDAR, S.Pd.I</u>
      </div>

    </div>
  </body>
</html>
