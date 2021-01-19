<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use JWTAuthException;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }
   
    public function register(Request $request){
        $user = $this->user->create([
            'gioitinh'=> $request->get('gioitinh'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        return response()->json([
            'status'=> 200,
            'message'=> 'User created successfully',
            'data'=>$user
        ]);
    }
    public function updateUser(Request $request){
        $user = Auth::user();
        if($user){
            $user = $this->user->update([
                'name'=>$request->get('name')
            ]);
        }else{
            
        }
        
        return Response()->json([
            'message'=>'update successfully',
            'data'=>$user
        ]);

    }
    
    public function login(Request $req){
        $credentials = $req->only('email','password');
        $token = null;
        if(!$token = JWTAuth::attempt($credentials)){
            return response()->json([
                'status' => 'false',
                'message' => 'Invalid Email or Password',
            ], Response::HTTP_BAD_REQUEST);
        }

        return response()->json(['token'=>$token],Response::HTTP_OK);
    }

    public function getUserInfo(Request $request){
        $user = Auth::user();

        if ($user) {
            return response($user, Response::HTTP_OK);
        }

        return response(null, Response::HTTP_BAD_REQUEST);
    }

    
}
