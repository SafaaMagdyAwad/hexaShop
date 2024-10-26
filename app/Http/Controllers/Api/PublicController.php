<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        return response()->json([
            'team' => $team,
        ], 200);
    }

    public function index()
    {
        $products = $this->product();
        return response()->json([
            'products' => $products,
        ], 200);
    }

    public function products()
    {
        $products = Product::where('isPublished', 1)->latest('updated_at')->simplePaginate(15);
        return response()->json([
            'products' => $products,
        ], 200);
    }

    public function singleProduct(string $id)
    {
        $product = Product::where('isPublished', 1)->findOrFail($id);
        return response()->json([
            'product' => $product,
        ], 200);
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:subscribes,email',
        ]);
        Subscribe::create($data);
        return response()->json([
            'success' => 'you have subscribed Successfull!',
        ], 200);
    }

    public function contactpost(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:subscribes,email',
            'message' => 'required|string',
        ]);
        Contact::create($data);
        return response()->json([
            'success' => 'Contact message was sent successfull!',
        ], 200);
    }

    public function product()
    {
        $menProducts = Product::where('isPublished', 1)->where('category', 'Men')->latest('updated_at')->get();
        $wemenProducts = Product::where('isPublished', 1)->where('category', 'Wemen')->latest('updated_at')->get();
        $kidsProducts = Product::where('isPublished', 1)->where('category', 'Kid')->latest('updated_at')->get();
        $accessories = Product::where('isPublished', 1)->where('category', 'Accessories')->latest('updated_at')->get();
        return response()->json([
            'menProducts' => $menProducts,
            'wemenProducts' => $wemenProducts,
            'kidsProducts' => $kidsProducts,
            'accessories' => $accessories
        ], 200);
    }

}
