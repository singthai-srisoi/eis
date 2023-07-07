<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_address; // Assuming you have a ShippingDetail model
use App\Models\tb_payment; // Assuming you have a ShippingDetail model
use App\Models\tb_user; // Assuming you have a ShippingDetail model
use App\Models\tb_productscategory; // Assuming you have a ShippingDetail model

class tb_addressController extends Controller
{
    //
    public function address()
    {
        $cat=tb_productscategory::all();
        return view('order.success', compact('cat'));
        
        
    }

    public function index()
    {
        $cat=tb_productscategory::all();
        return view('order.address', compact('cat'));
    }

}

