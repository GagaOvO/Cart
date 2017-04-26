<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;

use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products=Product::find('id');
        $products =Product::select('products.*')
        ->get();
        return view('index')
        ->with('products',$products);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AddToCart(Request $request , $id)
    {
        $products = Product::find($id);
        $oldCart = Session::has('cart') ?  Session::get('cart') : null ;
        $cart= new Cart($oldCart);   
        $cart ->add($products, $products->id);

        $request->session()->put('cart',$cart);
        dd($request->session()->get('cart'));
        return redirect ('home');
    }

    public function store(Request $request)
    {
        $products =new Product;
        $imageName = time().'.'.$request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('./img'), $imageName);
        $products->product_name =Input::get('product_name');
        $products->product_image =$imageName;
        $products->product_description =Input::get('product_description');
        $products->product_price =Input::get('product_price');

        $products->save();
        return redirect('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
