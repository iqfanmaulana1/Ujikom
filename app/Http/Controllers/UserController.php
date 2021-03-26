<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\UserModel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'user' => $this->UserModel->allData(),
        ];
        return view('v_user', $data);
    }
}
