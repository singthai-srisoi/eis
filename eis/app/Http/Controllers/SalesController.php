<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\Order_item;
use App\Models\Order;
use App\Models\Product;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')
            ->join('order_items', 'orders.o_id', '=', 'order_items.oItem_orderId')
            ->join('products', 'order_items.oItem_product', '=', 'products.prod_id')
            ->where('orders.o_status', '=', 'PAID')
            ->select('products.prod_code', 'products.prod_name', 'order_items.oItem_qty', 'orders.o_tax', 'orders.o_totalAmount', 'order_items.oItem_totalprice')
            ->get();

        $distinctProducts = DB::table('products')
            ->select('prod_code', 'prod_name')
            ->distinct()
            ->get();

        return view('report', ['orders' => $orders, 'distinctProducts' => $distinctProducts]);
    }

    public function dateBetween(Request $request){
        $selectedProducts = $request->input('products');

        $orders = DB::table('orders')
            ->join('order_items', 'orders.o_id', '=', 'order_items.oItem_orderId')
            ->join('products', 'order_items.oItem_product', '=', 'products.prod_id')
            ->where('orders.o_status', '=', 'PAID')
            ->whereBetween('orders.o_dateIssued', [$request->startDate, $request->endDate])
            ->select('products.prod_code', 'products.prod_name', 'order_items.oItem_qty', 'orders.o_tax', 'orders.o_totalAmount', 'order_items.oItem_totalprice')
            ->get();

        if (!empty($selectedProducts)) {
            $orders->whereIn('products.prod_code', $selectedProducts);
        }

        $distinctProducts = DB::table('products')
            ->select('prod_code', 'prod_name')
            ->distinct()
            ->get();

        return view('report', ['orders' => $orders, 'distinctProducts' => $distinctProducts]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
