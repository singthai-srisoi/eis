<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\tb_purchaserequest;
use App\Models\tb_supplier;
use App\Models\tb_product;
use App\Models\tb_uom;
use App\Models\tb_approval;
use Carbon\Carbon;


class tb_purchaserequestsController extends Controller
{
    

    public function index(){
        $tb_purchaserequest = tb_purchaserequest::all();
        return view('purchaserequest/pr', compact('tb_purchaserequest'));
    }

    public function getPurchaseRequestStatusCount()
    {
        $prCounts = [
            'pr_status_1' => tb_purchaserequest::where('pr_status', 1)->count(),
            'pr_status_2' => tb_purchaserequest::where('pr_status', 2)->count(),
            'pr_status_3' => tb_purchaserequest::where('pr_status', 3)->count(),
        ];

        return view('dashboard', compact('prCounts'));
    }


    public function create(){
        $products = tb_product::all();
        $uoms = tb_uom::all();
            
        return view('purchaserequest.purchaseReq-form', ['products' => $products, 'uoms' => $uoms]);
    }


    public function store(Request $req){
       
        $pr = new tb_purchaserequest();
    
        $pr->pr_ddate = $req->pr_ddate;
        $pr->pr_qty = $req->pr_qty; 
        $pr->pr_prodID = $req->pr_prodID;
        $pr->pr_uom = $req->pr_uom;

        // Get the product and supplier information
        $product = tb_product::where('prod_id', $req->pr_prodID)->first();
        $supplier = tb_supplier::where('sup_id', $product->prod_supplierID)->first();

        $pr->pr_supplierID = $supplier->sup_id;

        // Calculate pr_subtot
        $pr_subtot = ($product->prod_sellprice * $pr->pr_qty) + $supplier->sup_shippingFee;
        $pr->pr_subtot = $pr_subtot;

        $pr->pr_tax = $req->pr_tax;

        // Calculate pr_total: pr_subtot + (pr_subtot * pr_tax / 100)
        $pr->pr_total = $pr_subtot + ($pr_subtot * $pr->pr_tax / 100);

        $pr->pr_status = '1'; // Set pr_status to '1' automatically
        $pr->pr_cdate = now(); // Set the current timestamp
    
        $pr->save();

        return redirect('pr')->with('success', 'Purchase Request has been added');
    }


    public function view($pr_id){
        $pr = tb_purchaserequest::with('tb_product', 'tb_supplier', 'tb_uom', 'tb_approval')->where('pr_id', $pr_id)->first();
       // Convert pr_cdate to a Carbon instance
        $pr->pr_cdate = Carbon::createFromTimestamp(strtotime($pr->pr_cdate));
       
        $products = tb_product::all();
        $uoms = tb_uom::all();
        $suppliers = tb_supplier::all();
        $approvals = tb_approval::all();
        return view('purchaserequest/purchaseReq-invoice', ['pr' => $pr, 'products' => $products, 'uoms' => $uoms, 'suppliers' => $suppliers, 'approvals' => $approvals]);
   }

    // Edit the purchase request form
    public function edit($pr_id){
        $pr = tb_purchaserequest::with('tb_product', 'tb_supplier', 'tb_uom', 'tb_approval')->where('pr_id', $pr_id)->first();
       
         $products = tb_product::all();
         $uoms = tb_uom::all();
         $suppliers = tb_supplier::all();
         $approvals = tb_approval::all();
         return view('purchaserequest/pr-edit', ['pr' => $pr, 'products' => $products, 'uoms' => $uoms, 'suppliers' => $suppliers, 'approvals' => $approvals]);
    }

    // Update the purchase request
    public function update(Request $req, $pr_id){
        $pr = tb_purchaserequest::where('pr_id', $pr_id)->first();
        $pr->pr_ddate = $req->pr_ddate;
        $pr->pr_qty = $req->pr_qty; 
        $pr->pr_prodID = $req->pr_prodID;
        $pr->pr_uom = $req->pr_uom;

        // Get the product and supplier information
        $product = tb_product::where('prod_id', $req->pr_prodID)->first();
        $supplier = tb_supplier::where('sup_id', $product->prod_supplierID)->first();

        $pr->pr_supplierID = $supplier->sup_id;
        
        // Calculate pr_subtot
        $pr_subtot = ($product->prod_sellprice * $pr->pr_qty) + $supplier->sup_shippingFee;
        $pr->pr_subtot = $pr_subtot;

        $pr->pr_tax = $req->pr_tax;

        // Calculate pr_total: pr_subtot + (pr_subtot * pr_tax / 100)
        $pr->pr_total = $pr_subtot + ($pr_subtot * $pr->pr_tax / 100);

        $pr->save();

        return redirect('pr');
    }

    // Delete a purchase request
    public function delete($pr_id){
        $pr = tb_purchaserequest::where('pr_id', $pr_id)->first();
        if ($pr) {
            $pr->delete();
        }
        return redirect('pr');
    } 
    

    
}
