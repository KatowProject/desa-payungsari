<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Http\Requests\StorePegawaiRequest;
use App\Http\Requests\UpdatePegawaiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pegawai.index', [
            'title'     =>  'Pegawai',
            'angka'     =>  '1',
            'pegawai'   =>  Pegawai::all()    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pegawai.pegawai_create', [
            'title'     =>  'add pegawai'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePegawaiRequest $request)
    {
        $validated = $request->validate([
            'nama_pegawai'  => 'required',
            'jabatan'       => 'required',
            'pendidikan'    => 'required',
        ]);
        if($request->file('photo')){
            $validated['photo'] = $request->file('photo')->storePublicly('photo-pegawai');
        }else{
            $validated['photo'] = 'photo-pegawai/user.png';
        }
        Pegawai::create($validated);
        return back()->with('pegawai_create','berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('dashboard.pegawai.pegawai_edit', [
            'title'     => 'edit pegawai',
            'p'         => $pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePegawaiRequest $request, Pegawai $pegawai)
    {
        $validasi = $request->validate([
            'nama_pegawai'  => 'required',
            'jabatan'       => 'required',
            'pendidikan'    => 'required',
        ]);
        if($request->file('photo')){
            if($pegawai->photo != 'photo-pegawai/user.png'){
                Storage::delete($pegawai->photo);
            }
            $validated['photo'] = $request->file('photo')->storePublicly('photo-pegawai');
        }else{
            $validated['photo'] = $pegawai->photo;
        }
        Pegawai::where('id',$pegawai->id)->update($validasi);
        return back()->with('pegawai_update', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Pegawai $pegawai)
    {
        Pegawai::destroy($pegawai->id);
        if($pegawai->photo != 'photo-pegawai/user.png'){
            Storage::delete($pegawai->photo);
        }
        return back()->with('pegawai_destroy', 'berhasil');
    }
}
