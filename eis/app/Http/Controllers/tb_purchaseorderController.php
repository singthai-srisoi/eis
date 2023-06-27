<?php

namespace App\Http\Controllers;

use App\Models\tb_purchaseorder;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class tb_purchaseorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $purchaseorders = tb_purchaseorder::with('tb_purchaserequest', 'tb_purchaserequest.tb_product', 'tb_purchaserequest.tb_supplier')->orderBy('po_id', 'DESC') ->get();
        return view('purchase_order.index', compact('purchaseorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('purchase_order.create');
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
            'purchase_request' => 'required',
            'payment_term' => 'required',
            'delivery_to' => 'required',
            'buyer' => 'required'
        ]);
        $purchaseOrder = new tb_purchaseorder();
        $purchaseOrder->po_prID = $request->input('purchase_request');
        $purchaseOrder->po_paymentTerm = $request->input('payment_term');
        $purchaseOrder->po_deliveryTo = $request->input('delivery_to');
        $purchaseOrder->po_buyer = $request->input('buyer');
        $purchaseOrder->save();
        return redirect()->route('purchase_order.index')->with('success', 'Purchase order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $purchaseorder = tb_purchaseorder::findOrFail($id);
        $purchaserequest = $purchaseorder->tb_purchaserequest;
        $product = $purchaseorder->tb_purchaserequest->tb_product;
        return view('purchase_order.show',compact('purchaseorder','purchaserequest','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_purchaseorder $purchaseOrder): View
    {
        return view('purchase_order.edit',compact('purchaseOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'purchase_request' => 'required',
            'payment_term' => 'required',
            'delivery_to' => 'required',
            'buyer' => 'required'
        ]);
        $purchaseOrder = tb_purchaseorder::find($id);
        $purchaseOrder->po_prID = $request->input('purchase_request');
        $purchaseOrder->po_paymentTerm = $request->input('payment_term');
        $purchaseOrder->po_deliveryTo = $request->input('delivery_to');
        $purchaseOrder->po_buyer = $request->input('buyer');
        $purchaseOrder->save();
        return redirect()->route('purchase_order.index')->with('success', 'Purchase order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id= $request->input('poid');

        $purchaseOrder = tb_purchaseorder::find($id);

        $purchaseOrder->delete();

        return redirect()->route ('purchase_order.index')->with('success', 'Purchase order deleted successfully');
    }
}
