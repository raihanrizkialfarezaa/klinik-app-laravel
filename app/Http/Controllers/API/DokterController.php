<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dokter-api', ['except' => ['loginDokter','registDokter']]);
    }

    public function loginDokter(Request $request) 
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('username', 'password');

        $token = auth()->guard('dokter-api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = auth()->guard('dokter-api')->user();
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }
    
    public function registDokter(Request $request) 
    {
        $request->validate([
            'username' => 'required|unique:dokter',
            'password' => 'required',
            'nama_dokter' => 'required',
        ]);

        $dokter = Dokter::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_dokter' => $request->nama_dokter,
        ]);

        if ($dokter) {
            $token = auth()->guard('dokter-api')->login($dokter);
            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'user' => $dokter,
                'authorization' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);
        } else {
            return response()->json(['message' => 'Pendaftaran Gagal']);
        }
        
    }

    public function logout()
    {
        auth()->guard('dokter-api')->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => auth()->guard('dokter-api')->user(),
            'authorisation' => [
                'token' => auth()->guard('dokter-api')->refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
