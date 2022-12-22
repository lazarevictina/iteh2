<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
Use App\Models\User;

class AutfController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'password'=>'required|string'
        ]);

        if($validator->fails()){
            return response()->json(['Greška u procesu registracije', $validator->errors()]);
        }
        
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        $token = $user->createToken('TKN_REG')->plainTextToken;

        return response()->json([
            'User -> '=> $user,
            'RegToken ->'=> $token
        ]);
    }

    public function login(Request $request){
        $validator=Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required|string'
        ]);

        if($validator->fails()){
            return response()->json(['Proverite email ili šifru', $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response(['Info: ' => 'Proverite email ili šifru']);
        } else {
            $token = $user->createToken('TKN_LGN')->plainTextToken;

            return response()->json([
                'User -> ' => $user,
                'LgnToken -> ' => $token
            ]);
        }
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json('User logged out');
    }
}
