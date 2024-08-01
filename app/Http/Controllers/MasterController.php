<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//2338480 modified

class MasterController extends Controller
{
    public function index(){
        return view('master');
    }
}
