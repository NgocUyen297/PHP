<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $myphone = [
            'name' => 'Ngoc Uyen', 
            'age' => 18
        ];
        return view('products.index',[
            'myphone' => $myphone
        ]); 
    }

    public function detail($productName, $id)  { // receive the param from router
        return 'product id ='.$id.'ProductName'.$productName;
    }
}
