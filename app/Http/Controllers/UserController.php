<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    public function show($userId)
    {
        return new userResource(User::find($userId));
    }
}
