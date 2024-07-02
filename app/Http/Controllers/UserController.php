<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

class UserController extends Controller
{
    //
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'gender' => 'required',
            'contact' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        
        $success['_token'] =  $user->createToken('Personal Access Token')->plainTextToken;
        $success['name'] =  $user->name;
   
        // return $this->apiResponseService->responseSuccess($success, 'User created successfully.');
        return response()->json(['data'=>$success,'msg'=>'User created successfully'], 201);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors(),422]);
        }

        $credential = $request->only('email', 'password');
        if(Auth::attempt($credential, true)){
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                '_token' => $token,
                'user' => $user
            ], 200);
            // return response()->json(['msg'=>'Login successfully'], 201);
        }

        return response()->json(['msg'=>'Login failed'], 422);
    }

    public function userDetails (){
        
    }
}
