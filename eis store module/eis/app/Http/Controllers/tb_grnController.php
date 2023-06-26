<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_grn;
use App\Models\tb_purchaseorder;
use App\Models\tb_purchaserequest;
use App\Models\tb_product;
use App\Models\tb_supplier;
use App\Models\tb_uom;

class tb_grnController extends Controller
{
    public function index()
    {
        $grns = tb_grn::with('tb_purchaseorder', 'tb_purchaserequest', 'tb_product', 'tb_supplier', 'tb_uom')->get();
        $purchaseOrders = tb_purchaseorder::all();
        $purchaseOrdersNotInGrn = tb_purchaseorder::whereDoesntHave('grn')->get();
        // $grns = tb_grn::all();
        return view('grn', ['grn' => $grns, 'purchaseOrders' => $purchaseOrdersNotInGrn]);
    }

    public function grninvoice($id)
    {
        $grns = tb_grn::with('tb_purchaseorder', 'tb_purchaserequest', 'tb_product', 'tb_supplier', 'tb_uom')->where('grn_id', $id)->get();

        return view('grn-invoice', ['grn' => $grns]);
    }

    public function grnSave(Request $request)
    {
        $grn = new tb_grn();
        $grn->grn_id = $request->grn_id;
        $grn->grn_poid = $request->grn_poid;
        $grn->grn_date = $request->grn_date;
        $grn->grn_deliveryOrderNum = $request->grn_deliveryOrderNum;
        $grn->grn_deliverydate = $request->grn_deliverydate;
        $grn->grn_inhouse = $request->grn_inhouse;
        $grn->grn_recipient = $request->grn_recipient;
        $grn->save();

        // Retrieve the associated purchase request
        $purchaseRequest = tb_purchaseorder::find($request->grn_poid)->tb_purchaserequest;
    
        // Update the product quantity
        if ($purchaseRequest) {
            $product = $purchaseRequest->tb_product;
            if ($product) {
                $product->prod_stock += $purchaseRequest->pr_qty;
                $product->save();
            }
        }
        return redirect('grn');
    }

    public function edit(Request $request, $id)
    {
        $grn = tb_grn::find($id);
        $grn->grn_poid = $request->input('grn_poid');
        $grn->grn_date = $request->input('grn_date');
        $grn->grn_deliveryOrderNum = $request->input('grn_deliveryOrderNum');
        $grn->grn_deliverydate = $request->input('grn_deliverydate');
        $grn->grn_inhouse = $request->input('grn_inhouse');
        $grn->grn_recipient = $request->input('grn_recipient');
        $grn->save();

        return redirect('grn');
    }

    public function showData($id)
    {
        $grn = tb_grn::find($id);
        $purchaseOrder = tb_purchaseorder::where('po_id', $grn->grn_poid)->first();

        return view('edit-grn', ['grn' => $grn, 'purchaseOrders' => $purchaseOrder]);
    }

    public function delete($grn_id)
    {       
        $grn = tb_grn::find($grn_id);
        $grn->delete();        
        return redirect('grn');
    }
}
