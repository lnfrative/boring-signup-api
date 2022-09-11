<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(Request $request) {
        $this->validate($request, [
                'name' => 'required',
                'favorite_color' => 'required',
                'birthday' => 'required',
                'email' => 'required|email|unique:users',
            ]);

        $newUser = new User();

        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->favorite_color = $request->input('favorite_color');
        $newUser->birthday = $request->input('birthday');

        $newUser->save();

        return $this->successResponse($newUser);
    }
}
