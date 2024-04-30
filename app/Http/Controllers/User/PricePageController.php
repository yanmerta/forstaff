<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricePageController extends Controller
{
    public function price(){
        return view ('frontpage.price.price');
    }
}
