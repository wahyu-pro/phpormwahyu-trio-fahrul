<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;

use Demo\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function findById($id)
    {
        $userId = User::find($id);
        return $userId;
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return $user;
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return $user;
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}