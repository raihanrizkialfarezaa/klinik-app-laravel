<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin-api', ['except' => ['loginAdmin','registAdmin']]);
    }

    public function loginAdmin(Request $request) 
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('username', 'password');

        $token = auth()->guard('admin-api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = auth()->guard('admin-api')->user();
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }
    
    public function registAdmin(Request $request) 
    {
        $request->validate([
            'username' => 'required|unique:admin',
            'password' => 'required',
            'nama_petugas' => 'required',
        ]);

        $admin = Admin::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_petugas' => $request->nama_petugas,
        ]);

        if ($admin) {
            $token = auth()->guard('admin-api')->login($admin);
            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'user' => $admin,
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
        auth()->guard('admin-api')->logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => auth()->guard('admin-api')->user(),
            'authorisation' => [
                'token' => auth()->guard('admin-api')->refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
