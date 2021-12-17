<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Exception;

class UserController extends Controller
{
    public function user(Request $request)
    {
        try {
            $userdata = User::where('id', $request->id)->firstOrFail();

            return response()
                ->json([
                    'user_info' => $userdata
                ]);

        } catch(Exception $e){

            return response()
                ->json([
                    'error' => $e->getMessage(),
                    'message' => 'User not found in our DB records'
                ]);
        }

    }
}
