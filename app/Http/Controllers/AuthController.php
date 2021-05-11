<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    use ApiResponser;

    public function login(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validated) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                $token = $user->createToken('authToken')->accessToken;
                $data = [
                    'user' => $user,
                    'access_token' => $token,
                ];

                return $this->success($data, 'User Logged In Successfully');
            } else {
                return $this->fail('User Not Found');
            }
        }
    }

    public function register(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'password' => 'required|confirmed',
            'email' => 'required',
        ])->validate();

        if ($validated) {
            $validated['password'] = Hash::make($request->password);
            $user = User::create($validated);
            return $this->success($user, 'Registered Successfully', 201);
        }
    }

    public function logout()
    {
        if (Auth::check()) {
            if (Auth::user()->token()->revoke()) {
                return $this->success(null, 'User Logged Out Successfully');
            }
        }
    }
}
