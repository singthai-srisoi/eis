<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\tb_product;
use App\Models\tb_productscategory;
use App\Models\tb_supplier;
use App\Models\tb_productstatus;

class tb_productController extends Controller
{
    
    function indexcust(){
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

    public function index(): View
    {
        $product = tb_product::orderBy('prod_id', 'ASC')->get();
        return view('product.index', compact('product'));
    }

    public function create(): View
    {
        $categories = tb_productscategory::all();
        $suppliers = tb_supplier::all();
        $statuses = tb_productstatus::all();
        return view ('product.create', compact('categories', 'suppliers', 'statuses'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'p_code' => 'required',
            'p_name' => 'required',
            'p_ctg' => 'required',
            'p_price' => 'required',
            'p_sellPrice' => 'required',
            'p_supplierID' => 'required'
        ]);

        $product = new tb_product();
        $product->prod_code = $request->input('p_code');
        $product->prod_name = $request->input('p_name');
        if($request->file('p_image')){
            $imageName = time().'.'.$request->file('p_image')->extension();
            $request->p_image->move(public_path('images'), $imageName);
            $product->prod_image = $imageName;
        }
        $product->prod_ctg = $request->input('p_ctg');
        $product->prod_desc = $request->input('p_desc');
        $product->prod_price = $request->input('p_price');
        $product->prod_sellprice = $request->input('p_sellPrice');
        $product->prod_stock = $request->input('p_stock');
        $product->prod_supplierID = $request->input('p_supplierID');
        $product->prod_status = $request->input('p_status');
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    public function edit(tb_product  $product):View
    {
        $categories = tb_productscategory::all();
        $suppliers = tb_supplier::all();
        $statuses = tb_productstatus::all();
        return view ('product.edit', compact('product', 'categories', 'suppliers', 'statuses'));
    }

     public function update(Request $request, tb_product  $product): RedirectResponse
    {
        $request->validate([
            'p_code' => 'required',
            'p_name' => 'required',
            'p_ctg' => 'required',
            'p_price' => 'required',
            'p_sellPrice' => 'required',
            'p_supplierID' => 'required',
        ]);
        $product->prod_code = $request->input('p_code');
        $product->prod_name = $request->input('p_name');
        if($request->file('p_image')){
            $imageName = time().'.'.$request->file('p_image')->extension();
            $request->p_image->move(public_path('images'), $imageName);
            $product->prod_image = $imageName;
        }
        $product->prod_ctg = $request->input('p_ctg');
        $product->prod_desc = $request->input('p_desc');
        $product->prod_price = $request->input('p_price');
        $product->prod_sellprice = $request->input('p_sellPrice');
        $product->prod_stock = $request->input('p_stock');
        $product->prod_supplierID = $request->input('p_supplierID');
        $product->prod_status = $request->input('p_status');
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->input('p_id');

        $product = tb_product::find($id);

        $product->delete();

        return redirect()->route ('product_category.index')->with('success', 'Product deleted successfully.');
    }

    public function deletes($id)
    {
        // Retrieve the product based on the provided ID
        $product = tb_product::find($id);

        // Check if the product exists
        if ($product) {
            // Delete the product
            $product->delete();

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Product deleted successfully.');
        }

        // If the product doesn't exist, redirect back with an error message
        return redirect()->back()->with('error', 'Product not found.');
    }

    public function show()
    {
        $data = tb_product::all();
        return view('list-product',['c'=> $data]);
    }

    public function showData($id)
    {
        $data = tb_product::find($id);
        return view('edit-product',['c'=> $data]);
    }
}
