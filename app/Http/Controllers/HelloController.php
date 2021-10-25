<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //add
    public function index()
    {
        return view('hello');
        //view([Viewのフォルダー名].[View名])  viewsフォルダー直下にViewを配置しているため、Viewのフォルダー名はない
    }
}
