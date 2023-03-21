<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Pendaftaran;
use App\Models\Poli;
use App\Models\Riwayat;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('page.admin.pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        $poli = Poli::all();
        $dokter = Dokter::all();
        return view('page.user.page.pendaftaran', compact('pasien', 'poli', 'dokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $create = Pasien::create([
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        
        if ($create) {
            $make = Pendaftaran::create([
                'id_pasien' => $create->id_pasien,
                'id_poli' => $request->id_poli,
                'id_dokter' => $request->id_dokter,
            ]);
            if ($make) {
                Alert::success('Success', 'Pendaftaran anda berhasil!');
                return redirect()->route('pageawal');
            } else {
                Alert::error('Error', 'Pendaftaran anda tidak berhasil!');
                return redirect()->route('pageawal');
            }
            
        } else {
            Alert::error('Error', 'Pendaftaran anda tidak berhasil!');
            return redirect()->route('pageawal');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
