<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tb_product;

class tb_productController extends Controller
{      
    public function index()
    {
        return view('add-product');
    }

    public function AddProduct(Request $req)
    {
        $data = new tb_product;
        $data->prod_code = $req->prod_code;
        $data->prod_name = $req->prod_name;
        $data->prod_image = $req->prod_image;
        $data->prod_ctg = $req->prod_ctg;
        $data->prod_desc = $req->prod_desc;
        $data->prod_price = $req->prod_price;
        $data->prod_sellprice = $req->prod_sellprice;
        $data->prod_stock = $req->prod_stock;
        $data->prod_status = $req->prod_status;
        $data->prod_supplierID = $req->prod_supplierID;
        $data->save();
        return redirect('list-product');
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

    public function update(Request $req, $id)
    {
        $data = tb_product::find($id);   
        
        $data->prod_code = $req->prod_code;
        $data->prod_name = $req->prod_name;
        $data->prod_image = $req->prod_image;
        $data->prod_ctg = $req->prod_ctg;
        $data->prod_desc = $req->prod_desc;
        $data->prod_price = $req->prod_price;
        $data->prod_sellprice = $req->prod_sellprice;
        $data->prod_stock = $req->prod_stock;
        $data->prod_status = $req->prod_status;
        $data->prod_supplierID = $req->prod_supplierID;
        $data->update();

        return redirect('list-product')->with('success', 'Product updated successfully.');
    }
    
}
