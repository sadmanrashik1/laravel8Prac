<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to my laravel 8 web page ";
        $description="created by sadman";
        $data=[
            'productOne'=>'iPhone',
            'productTwo'=>'Samsung'
        ];
        //compact method
        // return view('Products.index',
        // compact('title','description')); 


        //with method
        //return view('Products.index')->with('data',$data);

        //Direct method
        return view ('products.index',[
            'key'=>$data
        ]);
    }
    public function about(){
        return 'About Us page';
    }
}
