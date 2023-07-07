<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_order;
use App\Models\tb_productscategory;
use App\Models\tb_product;
use App\Models\tb_orderItem;
use App\Models\tb_address;
use App\Models\tb_payment;
use App\Models\tb_packstatus;

class tb_orderController extends Controller
{
    //Display all orders
    function index($id){
        $data=tb_order::where('o_cust', $id)->get();
        $c=tb_productscategory::all();
        return view('order.order-history-cust',['orders'=>$data, 'cat'=>$c]);
    }

    function success(){
        $c=tb_productscategory::all();
        return view('order.success',['cat'=>$c]);
    }

    function receiptcust($id){
        $data=tb_orderItem::with('tb_order', 'tb_product')->where('oItem_orderId',$id)->get();
        $c=tb_productscategory::all();
        return view('order.receipt-cust',['orders'=>$data, 'cat'=>$c]);
    }

    //Display order details
    function vieworder($id){
        $data=tb_orderItem::with('tb_order', 'tb_product')->where('oItem_orderId',$id)->get();
        $id=tb_order::where('o_id',$id)->firstOrFail();
        $payment = tb_payment::where('p_orderId', $id->o_id)->firstOrFail();
        $address = tb_address::where('u_id', session('user')['u_id'])->firstOrFail();
        $c=tb_productscategory::all();
        return view('order.order-details-cust',['order'=>$data, 'id'=>$id,'cat'=>$c, 'payment'=>$payment, 'address'=>$address]);
    }

    public function placeorder(request $req){

        // Create a new order
        $order=new tb_order();
        $order->o_cust= session('user')['u_id'];
        $order->o_dateIssued=date('Y-m-d H:i:s');
        $order->o_status='Order Placed';
        $order->o_rate='0';
        $order->save();

        // Create order items
        $total = 0;
        $cart = session()->get('cart');
        foreach($cart as $item){

            $total += $item['prod_sellprice'] * $item['quantity']; 

            tb_orderItem::Create([
                'oItem_orderId'=> $order->o_id,
                'oItem_product'=> $item['prod_id'],
                'oItem_qty'=> $item['quantity'],
                'oItem_totalprice' => $item['prod_sellprice'] * $item['quantity'],
            ]);

            $product=tb_product::where('prod_id', $item['prod_id'])->firstOrFail();
            $product->prod_stock=$product->prod_stock-$item['quantity'];
            $product->update();
        }
        $order->o_totalAmount=$total+15;
        
        $order->save();
        $address = new tb_address;
        $address->u_id= session('user')['u_id'];
        $address->a_line1 = $req->a_line1;
        $address->a_line2 = $req->a_line2;
        $address->a_city = $req->a_city;
        $address->a_state = $req->a_state;
        $address->a_postcode = $req->a_postcode;
        $address->a_country = $req->a_country;

        $file = $req->file('p_file');
        $fileName = $file->getClientOriginalName();

        $folderPath = 'public/assets/media';
        $filePath = $file->store($folderPath);

        $payment = new tb_payment;
        $payment->u_id = session('user')['u_id'];
        $payment->p_file = $fileName;
        $payment->p_orderId = $order->o_id;
        $payment->save();


        $address->save();
        $payment->save();

        // Clear the cart in the session
        session()->forget('cart');
        
        return redirect('success')->with('order', $order->o_id);
    }
    //Display invoice
    function showInvoice($id){
        $data=tb_orderItem::with('tb_order', 'tb_product')->where('oItem_orderId',$id)->get();
        $id=tb_order::where('o_id',$id)->firstOrFail();
        $c=tb_productscategory::all();
        return view('order.invoice-cust',['orders'=>$data, 'id'=>$id,'cat'=>$c]);
    }


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
