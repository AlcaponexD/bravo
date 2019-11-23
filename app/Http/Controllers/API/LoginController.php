<?php

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function login()
    {
        $credentials = request(['email', 'password']);
        $token = Auth::guard('api')->attempt($credentials);
        if ($token){
            $user = User::where('email', '=' , $credentials['email'])->first();
            $user['token'] = $token;
            return response()->json($user);

        }else{
            return response()->json(['error' => 'credenciais inválidas'],401);
        }

    }
}
