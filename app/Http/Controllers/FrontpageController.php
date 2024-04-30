<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        $data = Home::all();
        return view('frontpage.home.home', [
            'data'=> $data[0],
        ]);
}
}
