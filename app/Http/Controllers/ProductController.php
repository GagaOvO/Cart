<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Illuminate\Http\Request;

use Session;  

use Illuminate\Support\Facades\Input;
class ProductController extends Controller
{
    
    public function index()
    {   
        $products =Product::all();
        return view('index')
        ->with('products',$products);        
    }

   
    public function AddToCart(Request $request , $id)
    {
        $products = Product::find($id);
        $oldcart = Session::has('cart') ?  Session::get('cart') : null ;
        $cart= new Cart($oldcart);   
        $cart ->add($products, $products->id);

        $request->session()->put('cart',$cart);
        return redirect ('index');
    }
    public function getCart(){
        if(!Session::has('cart')){
            return view('shopping-cart' ,['products'=> null]);
        }
        $oldcart= Session::get('cart');
        $cart = new Cart($oldcart);
        return view('shopping-cart' ,['products'=> $cart->items, 'TotalPrice'=>$cart->TotalPrice]);
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

}
