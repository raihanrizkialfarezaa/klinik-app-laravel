<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:pasien-api', ['except' => ['loginPasien','registPasien']]);
    }

    public function loginPasien(Request $request) 
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        // dd($request->only('username', 'password'));
        $credentials = $request->only('username', 'password');

        $token = auth()->guard('pasien-api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        } else {
            $user = auth()->guard('pasien-api')->user();
            return response()->json([
                'status' => 'success',
                'user' => $user,
                'authorization' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        }
    }
    
    public function registPasien(Request $request) 
    {
        $request->validate([
            'username' => 'required|unique:pasien',
            'password' => 'required',
            'nama_pasien' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $pasien = Pasien::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        if ($pasien) {
            $token = auth()->guard('pasien-api')->login($pasien);
            return response()->json([
                'status' => 'success',
                'message' => 'Pasien created successfully',
                'user' => $pasien,
                'authorization' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        } else {
            return response()->json(['message' => 'Pendaftaran Gagal']);
        }
        
    }

    public function me()
    {
        $data = Auth::guard('pasien-api')->user();

        return response()->json(['data' => $data]);
    }

    public function logout()
    {
        auth()->guard('pasien-api')->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => auth()->guard('pasien-api')->user(),
            'authorisation' => [
                'token' => Auth::guard('pasien-api')->refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
