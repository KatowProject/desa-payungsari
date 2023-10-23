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
        border-top:1px solid black ;
        margin-top: ;
        width:41% ;
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
        font-size: 14;
        font-family: 'Times New Roman';
        margin-top: 2rem;
      }
      .nomorsurat {
        text-align: center;
        font-size: 12;
        font-family: 'Times New Roman';
      }
      .paragraf {
        font-family: 'Times New Roman';
        font-size: 12;
        padding: 5px;
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

      .tanda-tangan{
        margin-left: 290px;
        margin-top: 150px
        font-family: 'Times New Roman';
      }

      .tanda-tangan .anak-terakhir{
        margin-top:-10px; 
        padding-bottom: 90px
        font-family: 'Times New Roman';
      }

      .paragraf-1{
        margin-top: -17px;
      }

      .anak-kedua{
        margin-top:-10px; 
      }

    </style>
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container mx-auto" style="">
      <div class="row">
        <div class="col-12 kopsurat text-center">

          <img src="{{ asset('assets/img/header-kop-surat.png') }}" width="100%" id="logo">
        </div>
      </div>
      <h1 class="judulsurat">SURAT KETERANGAN DOMISILI</h1>
      <div class="border-surat"></div>
      <p class="nomorsurat">Nomor : {{ $q->nomor_surat }}</p>
      
      <table class="px-6 paragraf-1" style="padding: 5px 11% ; line-height:25px;">
        <td class="paragraf" style="text-align: justify">&nbsp; &nbsp; &nbsp; &nbsp; Yang bertandatangan dibawah ini Kepala Desa Payungsari Kecamatan Pedes Kabupaten Karawang menerangkan bahwa :
        </td>
      </table>
      
      <table class="px-6" style="padding: 0 11% ; " cellspacing="7">
        <tr>
          <td class="paragraf" width="135px" >Nama</td>
          <td class="paragraf" width="15px">:</td>
          <td class="paragraf" >{{ $q->nama }}</td>
        </tr>
        <tr>
          <td class="paragraf" style="margin-top:10px;" >NIK</td>
          <td class="paragraf" >:</td>
          <td class="paragraf" >{{ $q->nik }}</td>
        </tr>
        <tr>
          <td class="paragraf" >Tempat, Tgl Lahir</td>
          <td class="paragraf" >:</td>
          <td class="paragraf" >{{ $q->ttl }}</td>
        </tr>
        <tr>
          <td class="paragraf" >Jenis Kelamin</td>
          <td class="paragraf" >:</td>
          <td class="paragraf" >{{ $q->jenis_kelamin }}</td>
        </tr>
        <tr>
          <td class="paragraf" >Pekerjaan</td>
          <td class="paragraf" >:</td>
          <td class="paragraf" >{{ $q->pekerjaan }}</td>
        </tr>
        <tr>
          <td class="paragraf" >Agama</td>
          <td class="paragraf" >:</td>
          <td class="paragraf" >{{ $q->agama }}</td>
        </tr>
        <tr>
          <td class="paragraf" >Status Perkawinan</td>
          <td class="paragraf" >:</td>
          <td class="paragraf" >{{ $q->status_perkawinan }}</td>
        </tr>
        <tr>
          <td class="paragraf" style="vertical-align: top;">Alamat di e-KTP</td>
          <td class="paragraf" style="vertical-align: top;">:</td>
          <td class="paragraf" >{{ $q->alamat }}</td>
        </tr>
      </table>

      <table class="px-6" style="padding: 5px 11% ;line-height:25px;">
        <td class="paragraf" style="text-align: justify">&nbsp; &nbsp; &nbsp; &nbsp;Yang bersangkutan adalah warga desa Kami yang beralamat tinggal atau berdomisili sebagaimana tersebut diatas. 
        </td>
      </table>

      <table class="px-6" style="padding: 0 11% ;line-height:25px;">
        <td class="paragraf" style="text-align: justify">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Surat Keterangan Domisili ini dibuat untuk keperluan {{ $q->keperluan }}.
        </td>
      </table>

      <table class="px-6" style="padding: 5px 11% ;line-height:25px;">
        <td class="paragraf" style="text-align: justify">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Demikian Surat Keterangan Domisili ini Kami buat dengan sebenar-benarnya, agar yang berkepentingan menjadi tahu dan dipergunakan sebagaimana mestinya.
        </td>
      </table>


      <div class="tanda-tangan" style="box-sizing: border-box; padding-top:30px;text-align:center;">
        <p>Payungsari, {{ $q->tanggal_ttd }}</p>
        @if (request()->an_kades)
        <p class="anak-kedua">An. PJ. KEPALA DESA PAYUNGSARI</p>
        <p class="anak-terakhir" style="padding-bottom: 70px;">{{$jabatan}}</p>
        <u style="font-weight: 600">{{ $pegawai }}</u>
        @else
        <p class="anak-kedua" style="padding-bottom: 70px;">PJ. KEPALA DESA PAYUNGSARI</p>
        <u style="font-weight: 600">{{ $pegawai }}</u>
        @endif
      </div>

      </div>
  </body>
</html>
