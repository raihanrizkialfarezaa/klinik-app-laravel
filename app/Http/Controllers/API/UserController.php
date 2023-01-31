<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
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
            return response()->json('Login Success');
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
            return response()->json(['message' => 'Successfully logged in']);
        } else {
            return response()->json(['message' => 'Pendaftaran Gagal']);
        }
        
    }
}
