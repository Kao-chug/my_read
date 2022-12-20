<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function wea(){
        return view('weartherMap-second');
    }
}
