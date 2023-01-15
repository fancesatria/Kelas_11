<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str; //ini utk Str:random biar gk eror
use Laravel\Lumen\Routing\Controller as BaseController;

class LoginController extends BaseController
{
    public function register(Request $request)
    {
        $data = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            'level'=>'pelanggan',
            'api_token'=>'12345',
            'status'=>'1',
            'relasi'=>$request->input('email'),
        ];

        User::create($data);

        return response()->json($data);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email',$email)->first(); //first mengambil satu baris data yang sama
    
        if ($user->password ===$password) {
            $token = Str::random(40);

            //proses update:
            $user->update([
                'api_token' => $token
            ]);

            return response()->json([
                'pesan' => 'Login berhasil',
                'token' => $token,
                'data' => $user
            ]);

        } else {
            return response()->json([
                'pesan' => 'Login gagal',
                'data' => ''
            ]);
        }
    }
}
