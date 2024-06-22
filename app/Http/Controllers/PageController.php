<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllers extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $name = 'Ngoc uyen';
        $names = ['Ngoc Uyen', 'hang', 'minh', 'hoang'];
        return view('pages.about', [
            'names'=> []
        ]);
    }
}
