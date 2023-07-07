<?php

namespace App\Http\Controllers;

use App\Models\Mishandling;
use App\Models\Order;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MishandlingController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'miss_desc' => 'required',
            'ship_id' => 'required',
        ]);

        // Create a new Mishandling record
        $mishandling = new Mishandling();
        $mishandling->miss_status = 'Pending';
        $mishandling->ship_id = $validatedData['ship_id'];
        $mishandling->miss_desc = $validatedData['miss_desc'];
        $mishandling->miss_date = Carbon::now()->toDateString();
        $mishandling->save();

        // Redirect or perform any additional actions
        // ...
        return redirect('logistics')->with('flash_message', 'Mishandling Reported!');
    }

    public function index()
    {
        $mishandling = Mishandling::with('shipping.order')->get();

        return view('mishandling.index')->with('mishandling', $mishandling);
    }


    public function show($miss_id)
    {
        $mishandling = Mishandling::with('shipping.order.customer')->find($miss_id);
        return view('mishandling.show')->with('mishandling', $mishandling);
    }


    public function edit($miss_id)
    {
        $mishandling = Mishandling::with('shipping.order.customer')->find($miss_id);
        return view('mishandling.edit')->with('mishandling', $mishandling);
    }

    public function update(Request $request, $miss_id)
    {
        $mishandling = Mishandling::find($miss_id);
        $input = $request->all();
        $mishandling->update($input);
        return redirect('mishandling')->with('flash_message', 'Mishandling Updated!');
    }

}
