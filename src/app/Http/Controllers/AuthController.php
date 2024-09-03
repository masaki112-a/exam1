<?php

namespace App\Http\Controllers;

use Illuminate\Http\AuthRequest;
use App\Models\Users;

class AuthController extends Controller
{
   public function index()
    {
    return view('admin');
    }

    public function confirm(AuthRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
        return view('login');
    }

    public function store(AuthRequest $request)
    {
        $user = $request->only(['name', 'email', 'password']);
            Users::create($user);
            return view('admin');
    }
}
