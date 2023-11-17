<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        $follows = (auth()->user()->following()->toggle($user->profile())) ? true : false;
        return response()->json(['success' => $follows]);
    }
}
