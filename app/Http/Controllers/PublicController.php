<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about(){
        $team=Employee::with(['jobData','socialLink'])->where('isPublished',1)->get();
        return view('about',compact('team'));
    }
    public function contact(){
        return view('contact');
    }
    public function index(){
        $menProducts=Product::where('isPublished',1)->where('category','Men')->get();
        $wemenProducts=Product::where('isPublished',1)->where('category','Wemen')->get();
        $kidsProducts=Product::where('isPublished',1)->where('category','Kid')->get();
        $accessories=Product::where('isPublished',1)->where('category','Accessories')->get();
        return view('index',compact('menProducts','wemenProducts','kidsProducts','accessories'));
    }
    public function products(){
        return view('products');
    }
    public function singleProduct(Product $product){
        return view('single-product',compact($product));
    }
    public function subscribe(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:subscribes,email',
        ]);
        Subscribe::create($data);
        return redirect()->back()->with('success','you have subscribed Successfull!');
    }
    public function contactpost(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:subscribes,email',
            'message'=>'required|string',
        ]);
        Contact::create($data);
        return redirect()->back()->with('success','Contact message was sent successfull!');
    }
}
