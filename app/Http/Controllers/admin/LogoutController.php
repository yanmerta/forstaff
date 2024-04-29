<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rules\LoginProcessRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{

    function process()
    {
        Session::flush();
        return redirect()->route('login');
    }
}
