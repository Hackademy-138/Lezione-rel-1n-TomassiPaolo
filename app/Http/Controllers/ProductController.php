<?php

namespace App\Http\Controllers;

// use auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProductController extends Controller
{
      public function __construct(){
          $this->middleware('auth');
      }

  public function getProductByUser($id){
      $user = User::find($id);
      $products = $user->products;
      return view('product.prodUser', compact('products', 'user'));
  }

    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        //
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('product.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        // dd($request->all());
        // Product::create([
        //     'name' => $request->input('name'),
        //     'body' => $request->input('body'),
        //     'price' => $request->input ('price'),
        //     'img' => $request->has('img') ? $request->file('img')->store('public/products') : '/img/jeeg.png',
        //     'user_id' => auth()->user()->id,
        // ]);
        
        Auth::user()->products()->create(
        [    
             'name' => $request->input('name'),
             'body' => $request->input('body'),   
             'price' => $request->input ('price'),
             'img' => $request->has('img') ? $request->file('img')->store('public/products') : '/img/jeeg.png',   
        ]
    );
        
        return redirect(route('home'))->with('message', 'Articolo Creato');
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Product $product)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Product $product)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Product $product)
    {
        //
    }
}
