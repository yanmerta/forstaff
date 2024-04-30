<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiturPageController extends Controller
{
    public function fitur(){
        return view ('frontpage.fitur.fitur');
    }
}
