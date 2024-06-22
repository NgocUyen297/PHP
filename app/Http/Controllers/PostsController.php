<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
       $posts = DB::table('posts')
       ->where('id', 3)
       ->delete();
    }
}
