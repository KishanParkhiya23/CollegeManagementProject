<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCallingController extends Controller
{
   
    public function HomePage()
    {
        return view('welcome');
    }
   
}
