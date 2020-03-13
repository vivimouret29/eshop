<?php

namespace App\Http\Controllers;

use App\User
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('home')->with('success', 'Compte supprimé');
    }
}
