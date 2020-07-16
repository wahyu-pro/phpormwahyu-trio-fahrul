<?php

namespace Demo\Controllers;

// use Illuminate\Http\Request;

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

    public function create($object)
    {
        $user = new User();
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        $user->name = $object->name;
        $user->email = $object->email;
        $user->save();

        return $user;
    }

    public function update($object, $id)
    {
        $user = User::find($id);
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        $user->name = $object->name;
        $user->email = $object->email;
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}