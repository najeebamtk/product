<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productlist;
use App\Http\Requests\ProductFormRequest;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Productlist::all();
        return view('home',['products'=>$products]);
    }
    public function Fncreateproduct(){
        return view('createproduct');
    }
    public function Fnaddproduct(ProductFormRequest $request){
        $product=$request->validated();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/products/', $filename);
            $product['image']= $filename;
        }
        
        Productlist::create($product);
        return redirect('home');

    }
    public function Fnproductsingle($id){
        $product=Productlist::where('id',$id)->find($id);
        return view('productsingle',['product'=>$product]);
    }
}
