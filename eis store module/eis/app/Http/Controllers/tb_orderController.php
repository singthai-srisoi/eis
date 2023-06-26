<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_order;
use App\Models\tb_order_item;
use App\Models\tb_packstatus;
use App\Models\tb_product;

class tb_orderController extends Controller
{
    public function show()
    {
        $data = tb_order::with('product')->get();
        $packStatuses = tb_packstatus::all();
        $unpackOrders = tb_order::where('o_pack_stat', 1)->get();
        $packOrders = tb_order::where('o_pack_stat', 2)->get();
        $transferOrders = tb_order::where('o_pack_stat', 3)->get();

        return view('order-dashboard', [
            'orders' => $data,
            'packStatuses' => $packStatuses,
            'unpackOrders' => $unpackOrders,
            'packOrders' => $packOrders,
            'transferOrders' => $transferOrders,
        ]);
    }

    public function update(Request $request, $id)
    {
        $order = tb_order::find($id);
        $packStatusId = $request->input('pack_status_id');
        $packStatus = tb_packstatus::find($packStatusId, ['pac_stat_id']);

        if ($packStatus) {
            $order->o_pack_stat = $packStatus->pac_stat_id;
            $order->save();
        }

        return redirect()->route('order-dashboard');
    }

    public function addStatus(Request $request)
    {
        $status = new tb_packstatus();
        $status->pac_stat_desc = $request->input('pac_stat_desc');
        $status->save();

        return redirect()->route('order-dashboard')->with('statusAdded', true);
    }

    public function updateStatus(Request $request)
    {
        $status = tb_packstatus::find($request->input('pac_stat_id'));
        $status->pac_stat_desc = $request->input('pac_stat_desc');
        $status->save();

        return redirect()->route('order-dashboard')->with('statusUpdated', true);
    }

    public function deleteStatus(Request $request)
    {
        $status = tb_packstatus::find($request->input('pac_stat_id'));
        $status->delete();

        return redirect()->route('order-dashboard')->with('statusDeleted', true);
    }
}
