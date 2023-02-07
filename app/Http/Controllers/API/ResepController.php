<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resep = Resep::all();
        
        return response()->json(['data' => $resep]);
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
        
        $resep = Resep::create($data);

        if ($resep) {
            return response()->json(['message' => 'Data berhasil di buat', 'data' => $resep]);
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
        $resep = Resep::where('id_resep', $id)->first();

        $update = $resep->update([
            'id_obat' => $request->id_obat,
            'jumlah' => $request->jumlah,
            'nama_resep' => $request->nama_resep,
        ]);

        if ($update) {
            return response()->json(['message' => 'Data berhasil di ubah', 'data' => $resep]);
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
        $resep = Resep::where('id_resep', $id)->first();

        $delete = $resep->delete();

        if ($delete) {
            return response()->json(['message' => 'Data berhasil di hapus']);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }
}
