<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function getAccessToken(Request $request)
    {
        
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required'
        ]);


        if (! $token = Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'error' => true,
                'message' => 'Wrong credentials!'
            ])->setStatusCode(401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => Auth::factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(Auth::user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(Auth::refresh());
    }


    /*public function passwordResetRequest(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();
        $user->reset_key = rand(10000, 99999);
        $user->save();

        Mail::raw("Your Password Reset Key is: {$user->reset_key} \n\n--\nLaravel Blog Team", function ($message) use ($user) {
            $message->from('no-reply@laravel-blog.com', 'Castro Team');
            $message->subject('Password Reset Key of Castro');
            $message->to($user->email);
        });

        return response()->json([
            'data' => [
                'message' => 'Password reset key sent to your email',
            ],
        ]);
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email|exists:users',
            'reset_key' => 'required',
            'password'  => 'required',
        ]);

        $user = User::where([
                ['reset_key', $request->reset_key],
                ['email', $request->email],
            ])->first();

        if (!$user) {
            return response()->json([
                'data' => [
                    'message' => 'Email and Reset Key does not match.'
                ]
            ], 422);
        }

        $user->reset_key = null;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'data' => [
                'message' => 'Password changed successfully.'
            ]
        ]);
    }*/

}