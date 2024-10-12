<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
        $team = Employee::with(['jobData', 'socialLink'])->where('isPublished', 1)->get();
        return view('about', compact('team'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function index()
    {
        $products = $this->product();
        return view('index', compact('products'));
    }
    public function products()
    {
        $products = Product::where('isPublished', 1)->latest('updated_at')->simplePaginate(15);
        return view('products', compact('products'));
    }
    public function singleProduct(string $id)
    {
        $product=Product::where('isPublished', 1)->findOrFail($id);
        return view('single-product', compact('product'));
    }
    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:subscribes,email',
        ]);
        Subscribe::create($data);
        return redirect()->back()->with('success', 'you have subscribed Successfull!');
    }
    public function contactpost(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:subscribes,email',
            'message' => 'required|string',
        ]);
        Contact::create($data);
        return redirect()->back()->with('success', 'Contact message was sent successfull!');
    }
    public function product()
    {
        $menProducts = Product::where('isPublished', 1)->where('category', 'Men')->latest('updated_at')->get();
        $wemenProducts = Product::where('isPublished', 1)->where('category', 'Wemen')->latest('updated_at')->get();
        $kidsProducts = Product::where('isPublished', 1)->where('category', 'Kid')->latest('updated_at')->get();
        $accessories = Product::where('isPublished', 1)->where('category', 'Accessories')->latest('updated_at')->get();
        return ['menProducts' => $menProducts, 'wemenProducts' => $wemenProducts, 'kidsProducts' => $kidsProducts, 'accessories' => $accessories];
    }
}
