<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  Goutte;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function index()
    {
        $user = Auth::user(); 
        $products = \App\Product::where('user_id', $user->id)
        ->orderBy('updated_at', 'desc')
        ->take(20)
        ->get();
        return view('pages.products',compact('products'));
    }
    public function add(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'pname' => 'required',
            'description' => 'required',
            'image' => 'required',
            'keywords' => 'required',
            'currency' => 'required',
            'site_name' => 'required',
            'price' => 'required',
        ]);
        $user = Auth::user(); 
        $productArr = $request->input('products');
            $product = \App\Product::updateOrCreate(
                ['link'=> $request->input('link'),'user_id' => $user->id],
                [        
                'name'=> $request->input('pname'),
            'link' => $request->input('link'),
             'user_id' => $user->id,
            'page_id'=> 'none',
           'description'=> $request->input('description'),
            'image'=> $request->input('image'),
           'keywords'=> $request->input('keywords'),
          'price'=> $request->input('price'),
          'priceCurrency'=> $request->input('currency'),
          'site_name'=> $request->input('site_name'),
          ]);
        
    return redirect()->route('products');

    }
    public function destroy($id)
    {
        $p = \App\Product::findOrFail($id);
        $p->delete();
    
        return redirect()->route('products');
    }
}
