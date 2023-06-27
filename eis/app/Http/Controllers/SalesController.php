<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\Order_item;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('tb_orders')
            ->join('tb_order_items', 'tb_orders.o_id', '=', 'tb_order_items.oItem_orderId')
            ->join('tb_products', 'tb_order_items.oItem_product', '=', 'tb_products.prod_id')
            ->where('tb_orders.o_status', '=', 'PAID')
            ->select('tb_products.prod_code', 'tb_products.prod_name', 'tb_order_items.oItem_qty', 'tb_orders.o_tax', 'tb_orders.o_totalAmount', 'tb_order_items.oItem_totalprice','tb_orders.o_id')
            ->get();

        $distinctProducts = DB::table('tb_products')
            ->select('prod_code', 'prod_name')
            ->distinct()
            ->get();

        return view('report', ['orders' => $orders, 'distinctProducts' => $distinctProducts]);
    }

    public function dateBetween(Request $request){
        $selectedProducts = $request->input('products');


        $orders = DB::table('tb_orders')
                ->join('tb_order_items', 'tb_orders.o_id', '=', 'tb_order_items.oItem_orderId')
                ->join('tb_products', 'tb_order_items.oItem_product', '=', 'tb_products.prod_id')
                ->where('tb_orders.o_status', '=', 'PAID');

        if (!empty($selectedProducts)) {
            $orders->whereIn('tb_products.prod_code', $selectedProducts);
        }

        if (!empty($request->startDate) && !empty($request->endDate)) {
            $orders->whereBetween('tb_orders.o_dateIssued', [$request->startDate, $request->endDate]);
        }

        $orders = $orders->select('tb_products.prod_code', 'tb_products.prod_name', 'tb_order_items.oItem_qty', 'tb_orders.o_tax', 'tb_orders.o_totalAmount', 'tb_order_items.oItem_totalprice', 'tb_orders.o_id')
            ->get();

        $distinctProducts = DB::table('tb_products')
            ->select('prod_code', 'prod_name')
            ->distinct()
            ->get();

        return view('report', ['orders' => $orders, 'distinctProducts' => $distinctProducts, 'filterData' => $request]);
    }


    public function dashboard()
    {
        // for monthly sales and profit of each product

        $currentYear = date('Y');

        $orders = DB::table('tb_orders AS o')
        ->join('tb_order_items AS oi', 'o.o_id', '=', 'oi.oItem_orderId')
        ->join('tb_products AS prod', 'oi.oItem_product', '=', 'prod.prod_id')
        ->select(
            DB::raw('MONTH(o.o_dateIssued) AS month'),
            'prod.prod_name AS product',
            DB::raw('SUM(oi.oItem_qty * (prod.prod_sellprice * (1 + o.o_tax / 100))) AS total_sales'),
            DB::raw('SUM(oi.oItem_qty * (prod.prod_sellprice - prod.prod_price)) AS total_profit'),
            DB::raw('SUM(oi.oItem_qty) AS total_qty')
        )
        ->where('o.o_status', '=', 'Paid')
        ->whereYear('o.o_dateIssued', '=', $currentYear)
        ->groupBy('month', 'product')
        ->orderBy('month')
        ->get();


        // get weekly profit
        $currentDate = Carbon::now();
        $startDate = $currentDate->startOfWeek()->toDateString(); // Start date of the week
        $endDate = $currentDate->endOfWeek()->toDateString();     // End date of the week
        
        $weeklyProfit = DB::table('tb_orders AS o')
                ->join('tb_order_items AS oi', 'o.o_id', '=', 'oi.oItem_orderId')
                ->join('tb_products AS prod', 'oi.oItem_product', '=', 'prod.prod_id')
                ->select(
                    DB::raw('WEEK(o.o_dateIssued) AS week'),
                    DB::raw('SUM(oi.oItem_qty * (prod.prod_sellprice - prod.prod_price)) AS weekly_profit')
                )
                ->where('o.o_status', '=', 'Paid')
                ->whereYear('o.o_dateIssued', '=', 2023)
                ->whereBetween('o.o_dateIssued', [$startDate, $endDate])
                ->groupBy('week')
                ->get();


        // top three products
        $topThreeProducts = DB::table('tb_orders AS o')
                ->join('tb_order_items AS oi', 'o.o_id', '=', 'oi.oItem_orderId')
                ->join('tb_products AS prod', 'oi.oItem_product', '=', 'prod.prod_id')
                ->select(
                    'prod.prod_name AS product',
                    DB::raw('SUM(oi.oItem_qty) AS total_qty')
                )
                ->where('o.o_status', '=', 'Paid')
                ->whereYear('o.o_dateIssued', '=', 2023)
                ->groupBy('product')
                ->orderBy('total_qty', 'DESC')
                ->limit(3)
                ->get();
                    
        // monthly data
        $currentMonth = date('n');

        $monthlyData = DB::table('tb_orders AS o')
            ->join('tb_order_items AS oi', 'o.o_id', '=', 'oi.oItem_orderId')
            ->join('tb_products AS prod', 'oi.oItem_product', '=', 'prod.prod_id')
            ->select(
                DB::raw('MONTH(o.o_dateIssued) AS month'),
                DB::raw('SUM(oi.oItem_qty * (prod.prod_sellprice * (1 + o.o_tax / 100))) AS total_sales'),
                DB::raw('SUM(oi.oItem_qty * (prod.prod_sellprice - prod.prod_price)) AS total_profit'),
                DB::raw('((SUM(oi.oItem_qty * (prod.prod_sellprice - prod.prod_price)) - 
                    LAG(SUM(oi.oItem_qty * (prod.prod_sellprice - prod.prod_price))) 
                    OVER (ORDER BY MONTH(o.o_dateIssued))) / 
                    LAG(SUM(oi.oItem_qty * (prod.prod_sellprice - prod.prod_price))) 
                    OVER (ORDER BY MONTH(o.o_dateIssued))) * 100 AS profit_growth'),
                DB::raw('SUM(oi.oItem_qty) AS total_order')
            )
            ->where('o.o_status', '=', 'Paid')
            ->groupBy('month')
            ->orderBy('month')
            ->get();
        $monthlyData = $monthlyData->whereMonth('o.o_dateIssued', '=', $currentMonth);

        return view('sales_dashboard', ['orders' => $orders, 'weeklyProfit' => $weeklyProfit, 'topThreeProducts' => $topThreeProducts, 'monthlyData' => $monthlyData]);
    }
}

