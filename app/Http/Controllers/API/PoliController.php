<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poli = Poli::all();
        
        return response()->json(['data' => $poli]);
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
        
        $poli = Poli::create($data);

        if ($poli) {
            return response()->json(['message' => 'Data berhasil di buat', 'data' => $poli]);
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
        $poli = Poli::where('id_poli', $id)->first();

        $update = $poli->update([
            'nama_poli' => $request->nama_poli,
        ]);

        if ($update) {
            return response()->json(['message' => 'Data berhasil di ubah', 'data' => $poli]);
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
        $poli = Poli::where('id_poli', $id)->first();

        $delete = $poli->delete();

        if ($delete) {
            return response()->json(['message' => 'Data berhasil di hapus']);
        } else {
            return response()->json(['message' => 'Data gagal di buat!'], 403);
        }
        
    }
}
