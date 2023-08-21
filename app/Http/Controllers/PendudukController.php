<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Http\Requests\StorePendudukRequest;
use App\Http\Requests\UpdatePendudukRequest;
use App\Models\Pegawai;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   

        return view('dashboard.kependudukan.penduduk', [
            'title' =>  'Kependudukan Desa',
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kependudukan.penduduk_create', [
            'title' =>  'Tambah Penduduk',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePendudukRequest $request)
    {
        //dd($request);

        $tanggal = $request->tanggal;
        $bulan   = $request->bulan;
        $tahun   = $request->tahun;
        $tanggal_lahir = $tanggal.'/'.$bulan.'/'.$tahun;

        $validasi = $request->validate([
            'nomor_kk'          =>  '',
            'nik'               =>  'required',
            'nama_lengkap'      =>  'required',
            'tempat_lahir'      =>  '',
            'jenis_kelamin'     =>  '',
            'agama'             =>  '',
            'status_perkawinan'  =>  '',
            'pekerjaan'         =>  '',
            'dusun'             =>  '',
            'no_rt'             =>  '',
            'no_rw'             =>  '',
            'pendidikan'        =>  '',
            'nama_ayah'         =>  '',
            'nama_ibu'          =>  '',
            'status_dalam_kk'   =>  '',
        ]);

        $validasi['tanggal_lahir'] = $tanggal_lahir;

        if($request->file('photo')){
            $validasi['photo'] = $request->file('photo')->storePublicly('photo');
        }
        if($request->file('file_ktp')){
            $validasi['file_ktp'] = $request->file('file_ktp')->storePublicly('file_ktp');
        }
        if($request->file('file_kk')){
            $validasi['file_kk'] = $request->file('file_kk')->storePublicly('file_kk');
        }

        Penduduk::create($validasi);
        $request->session()->put('penduduk_create', 'berhasil');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk)
    {
        // dd(new DateTime());
        $dmy = explode("/",$penduduk->tanggal_lahir);
        $tanggal_lahir = $dmy[0];
        $tahun_lahir = $dmy[2];
        $bulan_lahir = '';
        switch ($dmy[1]) {
            case '1':
                $bulan_lahir = 'Januari';
                break;
            case '2':
                $bulan_lahir = 'Februari';
                break;
            case '3':
                $bulan_lahir = 'Maret';
                break;
            case '4':
                $bulan_lahir = 'April';
                break;
            case '5':
                $bulan_lahir = 'Mei';
                break;
            case '6':
                $bulan_lahir = 'Juni';
                break;
            case '7':
                $bulan_lahir = 'Juli';
                break;
            case '8':
                $bulan_lahir = 'Agustus';
                break;
            case '9':
                $bulan_lahir = 'September';
                break;
            case '10':
                $bulan_lahir = 'Oktober';
                break;
            case '11':
                $bulan_lahir = 'November';
                break;
            case '12':
                $bulan_lahir = 'Desember';
                break;
            
            default:
                # code...
                break;
        }

        return view('dashboard.kependudukan.buatsurat', [
            'title' =>  'Pembuatan Surat',
            'p' =>  $penduduk,
            'tanggal_lahir'   =>  $tanggal_lahir,
            'tahun_lahir'     =>  $tahun_lahir,
            'bulan_lahir'=>  $bulan_lahir,
            'pegawai' => Pegawai::all(),
            'tanggal' => Carbon::now()->isoFormat('D MMMM Y')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penduduk $penduduk)
    {

        $dmy = explode("/",$penduduk->tanggal_lahir);
        $tanggal_lahir = $dmy[0];
        $tahun_lahir = $dmy[2];
        $bulan_lahir = '';
        switch ($dmy[1]) {
            case '1':
                $bulan_lahir = 'Januari';
                break;
            case '2':
                $bulan_lahir = 'Februari';
                break;
            case '3':
                $bulan_lahir = 'Maret';
                break;
            case '4':
                $bulan_lahir = 'April';
                break;
            case '5':
                $bulan_lahir = 'Mei';
                break;
            case '6':
                $bulan_lahir = 'Juni';
                break;
            case '7':
                $bulan_lahir = 'Juli';
                break;
            case '8':
                $bulan_lahir = 'Agustus';
                break;
            case '9':
                $bulan_lahir = 'September';
                break;
            case '10':
                $bulan_lahir = 'Oktober';
                break;
            case '11':
                $bulan_lahir = 'November';
                break;
            case '12':
                $bulan_lahir = 'Desember';
                break;
            
            default:
                # code...
                break;
        }
        return view('dashboard.kependudukan.penduduk_edit', [
            'title'     =>  'Edit Penduduk',
            'penduduk'  =>  $penduduk,
            'tanggal'   =>  $tanggal_lahir,
            'bulan'     =>  $dmy[1],
            'tahun'     =>  $tahun_lahir,
            'nama_bulan'=>  $bulan_lahir,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePendudukRequest $request, Penduduk $penduduk)
    {
        $tanggal = $request->tanggal;
        $bulan   = $request->bulan;
        $tahun   = $request->tahun;
        $tanggal_lahir = $tanggal.'/'.$bulan.'/'.$tahun;

        $validasi = $request->validate([
            'nomor_kk'          =>  '',
            'nik'               =>  'required',
            'nama_lengkap'      =>  'required',
            'tempat_lahir'      =>  '',
            'jenis_kelamin'     =>  '',
            'agama'              =>  '',
            'status_perkawinan'  =>  '',
            'pekerjaan'         =>  '',
            'dusun'             =>  '',
            'no_rt'             =>  '',
            'no_rw'             =>  '',
            'pendidikan'        =>  '',
            'nama_ayah'         =>  '',
            'nama_ibu'          =>  '',
            'status_dalam_kk'   =>  '',
            'photo'             =>  '',
            'file_ktp'          =>  '',
            'file_kk'           =>  '',
        ]);

        $validasi['tanggal_lahir'] = $tanggal_lahir;

        Penduduk::where('id',$penduduk->id)->update($validasi);
        $request->session()->put('penduduk_update', 'berhasil');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Penduduk $penduduk)
    {
        // if($penduduk->photo!='photo_pegawai/user.png'){
        //     Storage::delete($penduduk->photo);
        // }
        Penduduk::destroy($penduduk->id);
        !is_null($penduduk->photo) && Storage::delete($penduduk->photo);
        !is_null($penduduk->file_ktp) && Storage::delete($penduduk->file_ktp);
        !is_null($penduduk->file_kk) && Storage::delete($penduduk->file_kk);
        $request->session()->put('penduduk_destroy', 'berhasil');
        return redirect('penduduk');
    }

    public function pencarian_penduduk(Request $request)
    {
        $q='';
        $key='';
        if($request->dusun != ""){
            $penduduk = Penduduk::where('dusun',$request->dusun);
            $q=$request->dusun;
            $key='Dusun';
        }
        if($request->no_rt != ""){
            $penduduk = Penduduk::where('no_rt',$request->no_rt);
            $q=$request->no_rt;
            $key='Nomor RT';
        }
        if($request->no_rw != ""){
            $penduduk = Penduduk::where('no_rw',$request->no_rw);
            $q=$request->no_rw;
            $key='Nomor RW';
        }
        if($request->nama_lengkap != ""){
            $penduduk = Penduduk::where('nama_lengkap', 'like', '%' . $request->nama_lengkap . '%');
            $q=$request->nama_lengkap;
            $key='Nama';
        }
        if($request->nik != ""){
            $penduduk = Penduduk::where('nik',$request->nik);
            $q=$request->nik;
            $key='NIK';
        }
        if($request->nomor_kk != ""){
            $penduduk = Penduduk::where('nomor_kk',$request->nomor_kk);
            $q=$request->nomor_kk;
            $key='Nomor KK';
        }
        
        return view('dashboard.kependudukan.penduduk_hasil', [
            'title'     =>  'Hasil Pencarian Penduduk',
            'q'     =>  $q,
            'key'     =>  $key,
            'angka'     =>  '1',
            'penduduk'  =>  $penduduk->get()
        ]);
    }
}
