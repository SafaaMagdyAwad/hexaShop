<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function index(){
        return view('index');
    }
    public function products(){
        return view('products');
    }
    public function singleProduct(){
        return view('single-product');
    }
}
