<?php

namespace MoWebSo\Users\Controller;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('users::users.index');
    }
}
