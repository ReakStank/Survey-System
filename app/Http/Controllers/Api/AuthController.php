<?php

namespace App\Http\Controllers\Api;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AuthController extends Controller
{

    public function register(Request $request){
        $ValidateDate = $request ->validate(['role_id' => ['required', 'numeric'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],]);
            $ValidateDate['password']=bcrypt($request->password);
            
            $user = User::create($ValidateDate);
            $accessToken=$user->createToken('authToken')->accessToken;
            //  return response('user' -> $user);
            return response()->json(['user'=>$user,'acessToken'=>$accessToken]);
            // return array('user'->$user,'accessToken'->$accessToken);
        
    }
    public function login(Request $request){
        $LoginDate = $request ->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8'],]);
            if (!auth() ->attempt($LoginDate)){
                return response(['message'=>"Invalid credentials"]);
            }
            $accessToken=auth()->user()->createToken('authToken')->accessToken; 
            return response()->json(['user'=>auth()->user(),'acessToken'=>$accessToken]);
    }
   
}
