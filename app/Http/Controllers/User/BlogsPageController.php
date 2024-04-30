<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsPageController extends Controller
{
    public function blogs(){
        return view ('frontpage.blogs.blogs', [
        ]);
    }
}
