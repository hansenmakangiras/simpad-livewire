<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;

class HakAksesController extends Controller
{
    public function index()
    {
        return view('account.roles.index');
    }
}
