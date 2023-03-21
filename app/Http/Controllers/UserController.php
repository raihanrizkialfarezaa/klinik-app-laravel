<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginAdmin(Request $request) 
    {
        $userAdmin = Admin::where('username', $request->username)->first();
        // dd(bcrypt($request->password));
        $password = bcrypt($request->password);
        // dd($password);
        if (Hash::check($request->password, $userAdmin->password)) {
            $request->session()->put('admin', $userAdmin);
            return redirect()->route('dashboard');
        } else {
            
            return response()->json('Login Failed');
        }
    }
    
    public function registAdmin(Request $request) 
    {
        $validator = Validator::make(request()->all(), [
            'username' => 'required|unique:admin',
            'password' => 'required',
            'nama_petugas' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $user = Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_petugas' => $request->nama_petugas,
        ]);

        if ($user) {
            $request->session()->put('admin', $user);
            Alert::success('Success', 'Pendaftaran Berhasil');
            return redirect()->route('dashboard');
        } else {
            Alert::error('Error', 'Pendaftaran Gagal');
            return redirect()->route('home');;
        }
        
    }
    public function loginDokter(Request $request) 
    {
        $userDokter = Dokter::where('username', $request->username)->first();
        // dd(bcrypt($request->password));
        $password = bcrypt($request->password);
        // dd($password);
        if (Hash::check($request->password, $userDokter->password)) {
            $request->session()->put('dokter', $userDokter);
            return redirect()->route('dashboard');
        } else {
            
            return response()->json('Login Failed');
        }
    }
    
    public function registDokter(Request $request) 
    {
        $validator = Validator::make(request()->all(), [
            'username' => 'required|unique:dokter',
            'password' => 'required',
            'nama_petugas' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $user = Dokter::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_petugas' => $request->nama_petugas,
        ]);

        if ($user) {
            $request->session()->put('dokter', $user);
            Alert::success('Success', 'Pendaftaran Berhasil');
            return redirect()->route('dashboard');
        } else {
            Alert::error('Error', 'Pendaftaran Gagal');
            return redirect()->route('home');;
        }
        
    }
}
