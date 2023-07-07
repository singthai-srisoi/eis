<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Shipping;

class DeliveryController extends Controller
{
    public function show($shp_id)
    {
        $shipping = Shipping::findOrFail($shp_id);
        $order = $shipping->order;
        $customer = $order->customer;

        return view('delivery.show', compact('customer', 'shipping', 'order'));
    }
    

    public function index()
    {
        $customers = Customer::all();
        $shipping = Shipping::with('order')->get();

        return view('delivery.index', compact('shipping', 'customers'));
    }

    public function index1(Request $request)
        {
            $selectedCustomerId = $request->input('customer');
            
            $shippingQuery = Shipping::with('order');

            if ($selectedCustomerId) {
                $shippingQuery->whereHas('order.customer', function ($query) use ($selectedCustomerId) {
                    $query->where('c_id', $selectedCustomerId);
                });
            }
            
            $shipping = $shippingQuery->get();

            $customers = Customer::all();

            return view('delivery.index', compact('shipping', 'customers'));
        }


}
