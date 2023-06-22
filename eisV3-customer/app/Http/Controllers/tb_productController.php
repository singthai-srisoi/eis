<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_product;
use App\Models\tb_productscategory;

class tb_productController extends Controller
{
    
    function index(){
        $product=tb_product::all();
        $cat=tb_productscategory::all();
        return view('product.product-cust',compact('product','cat'));
    }

    public function viewcategory($category)
    {
        $ctg = tb_productscategory::where('ctg_desc', $category)->firstOrFail();
        $product = tb_product::where('prod_ctg', $ctg->ctg_id)->get();
        $cat=tb_productscategory::all();

        return view('product.product-category', compact('product','cat','ctg'));
    }

    function productView($id){
        $product=tb_product::with('tb_productscategory')->where('prod_id', $id)->firstOrFail();
        $cat=tb_productscategory::all();
        return view('product.product-details',compact('product','cat'));
    }

    function addToCart($id){

        $product=tb_product::where('prod_code', $id)->firstOrFail();

        $cart=session()->get('cart',[]);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;

        }else{
            $cart[$id]=[
                'prod_id'=>$product->prod_id,
                'prod_code'=>$product->prod_code,
                'prod_name'=>$product->prod_name,
                'prod_image'=>$product->prod_image,
                'prod_desc'=>$product->prod_desc,
                'prod_stock'=>$product->prod_stock,
                'prod_sellprice'=>$product->prod_sellprice,
                'quantity'=>1,
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart.');
    }

    function cart(){
        $cat=tb_productscategory::all();
        $product=tb_product::all();
        return view('order.order-cust',compact('product','cat'));
    }

    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated!');
        }
    }
  
    public function removeCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Cart updated!');
            }
        }
    }

}
