<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        
        return response()->json(['data' => $obat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        
        $obat = Obat::create($data);

        if ($obat) {
            return response()->json(['message' => 'Data berhasil di buat', 'data' => $obat]);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
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
        $obat = Obat::where('id_obat', $id)->first();

        $update = $obat->update([
            'nama_obat' => $request->nama_obat,
        ]);

        if ($update) {
            return response()->json(['message' => 'Data berhasil di ubah', 'data' => $obat]);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::where('id_obat', $id)->first();

        $delete = $obat->delete();

        if ($delete) {
            return response()->json(['message' => 'Data berhasil di hapus']);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }
}
