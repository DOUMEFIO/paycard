<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    function index(Request $request){
        $user= User::where('email', $request->email)->first();
            //print_r($data);
            if(!$user || !Hash::check($request->password, $user->password)){
                return response([
                    'message'=>['Ne peut pas se conNBVH?GHGGnecter.' .$user]
                ],404);
            }
            $token = $user->createToken('my-app-token')->plainTextToken;
            $response = [
                'user' => $user,
                'token' =>$token
            ];
            return response($response, 201);
    }
}
