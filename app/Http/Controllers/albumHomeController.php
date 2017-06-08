<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Album;
class albumHomeController extends Controller
{
    //首页
    public function index()
    {
        $albums = Album::all();
        return   view('home', compact('albums'));
    }

    //首页
    public function t()
    {
        return   view('t');
    }
    
}
