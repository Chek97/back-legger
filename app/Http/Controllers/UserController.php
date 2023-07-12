<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Firebase\JWT\JWT;

class UserController extends Controller
{
    //Login User
    public function login(Request $request)
    {

        $users = User::all();

        if (count($users) != 0) {

            foreach ($users as $user) {
                if ($user->email === $request->email && $user->password === $request->password) {

                    $secretKey = "valor_secreto_2099";
                    $data = [
                        "id" => $user->id,
                        "email" => $user->email
                    ];

                    $token = JWT::encode($data, $secretKey, 'HS256');

                    return response()->json([
                        "ok" => true, "user" => ["id" => $user->id, "email" => $user->email, "token" => $token]
                    ], 200);
                }
            }
            return response()->json([
                "ok" => false, "message" => "El usuario no fue encontrado"
            ], 400);
        } else {
            return response()->json([
                "ok" => false, "message" => "No hay usuarios todavia"
            ], 400);
        }
    }
}
