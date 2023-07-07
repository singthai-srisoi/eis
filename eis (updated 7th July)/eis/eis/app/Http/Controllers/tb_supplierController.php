<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class tb_supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = tb_supplier::orderBy('sup_id', 'ASC')->get();
        return view('supplier.index', compact('suppliers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view ('supplier.create');
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
            'sup_name' => 'required',
            'sup_shop' => 'required',
            'sup_address' => 'required',
            'sup_phone' => 'required',
            'sup_fax' => 'required',
            'sup_email' => 'required'
        ]);

        $supplier = new tb_supplier();
        $supplier->sup_name = $request->input('sup_name');
        $supplier->sup_shop = $request->input('sup_shop');
        $supplier->sup_address = $request->input('sup_address');
        $supplier->sup_phone = $request->input('sup_phone');
        $supplier->sup_fax = $request->input('sup_fax');
        $supplier->sup_email = $request->input('sup_email');
        $supplier->sup_shippingFee = $request->input('sup_shippingFee');
        $supplier->save();

        return redirect()->route('supplier.index')->with('success', 'Supplier added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $supplier = tb_supplier::findOrFail($id);

        return view ('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = tb_supplier::findOrFail($id);

        return view ('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sup_name' => 'required',
            'sup_shop' => 'required',
            'sup_address' => 'required',
            'sup_phone' => 'required',
            'sup_fax' => 'required',
            'sup_email' => 'required',
            'sup_shippingFee' => 'required'
        ]);
        $supplier = tb_supplier::find($id);
        $supplier->sup_name = $request->input('sup_name');
        $supplier->sup_shop = $request->input('sup_shop');
        $supplier->sup_address = $request->input('sup_address');
        $supplier->sup_phone = $request->input('sup_phone');
        $supplier->sup_fax = $request->input('sup_fax');
        $supplier->sup_email = $request->input('sup_email');
        $supplier->sup_shippingFee = $request->input('sup_shippingFee');
        $supplier->save();
        return redirect()->route('supplier.index')->with('success', 'Supplier detail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->input('supid');

        $supplier = tb_supplier::find($id);

        $supplier->delete();

        return redirect()->route ('supplier.index')->with('success', 'Purchase order deleted successfully');
    }

}
