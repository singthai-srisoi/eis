<?php

namespace App\Http\Controllers;

use App\Models\tb_product;
use App\Models\tb_productscategory;
use App\Models\tb_supplier;
use App\Models\tb_productstatus;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class tb_productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $product = tb_product::orderBy('prod_id', 'ASC')->get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $categories = tb_productscategory::all();
        $suppliers = tb_supplier::all();
        $statuses = tb_productstatus::all();
        return view ('product.create', compact('categories', 'suppliers', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_product  $product):View
    {
        $categories = tb_productscategory::all();
        $suppliers = tb_supplier::all();
        $statuses = tb_productstatus::all();
        return view ('product.edit', compact('product', 'categories', 'suppliers', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

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
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->input('p_id');

        $product = tb_product::find($id);

        $product->delete();

        return redirect()->route ('product_category.index')->with('success', 'Product deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //public function show($id): View
    //{
    //    $product = tb_product::findOrFail($id);

    //    return view ('product.show', compact('product'));
    //}

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
