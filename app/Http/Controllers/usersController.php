<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\admin_user;
use App\Utils\Token;

class usersController extends Controller
{

    public function createUser(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => 'required',
                'userpassword' => 'required'
            ]);

            $new_admin_user = new admin_user();

            $new_admin_user->username = $credentials["username"];
            $new_admin_user->userpassword = hash('sha512', $credentials["userpassword"]);

            $new_admin_user->save();

            return response()->json([
                'respose' => 'Usuario creado con éxito!'
            ], 201);
        } catch (Exception $e) {
            return response()->json(
                $e,
                500
            );
        }
    }
    public function userAuth(Request $request)
    {
        try {
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

            $userExist = admin_user::select('admin_users.username', 'admin_users.userpassword')
                ->where('username', $credentials['username'])
                ->where('userpassword', $credentials['password'])
                ->first();

            if (!$userExist) {
                return response()->json([
                    'response' => 'Invalid username or password'
                ], 401); // Unauthorized status code 
            }

            $token = Token::generate($credentials['username'], $credentials['password']);
            return response()->json([
                'token' => $token,
                'employee_name' => $credentials["username"]
            ], 201);

        } catch (Exception $e) {
            return response()->json(
                $e,
                500
            );
        }
        //! Toda la función en un TryCatch
        //! Instalar JWT
        //! Crear Clase Token en /Utils
        //! Generar Token con la información del usuario que quiere inicial sesión
        //! Enviar como respuesta el token
    }

    public function getUsers()
    {
        $users = admin_user::all();
        return response()->json($users, 200);
    }
}
