<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_user;
use App\Models\tb_address;
use App\Models\tb_productscategory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class tb_userController extends Controller
{
    public function signup()
    {
        return view('customer/signup');
    }

    public function signupSave(Request $req)
    {
        $user = new tb_user;
        $user->u_email = $req->email;
        $user->u_pwd = Hash::make($req->password);
        $user->u_type = 'customer';
        $user->save();
        return redirect('signin');
    }

    public function signin()
    {
        return view('customer/signin');
    }

    public function signinCred(Request $req)
    {
        $user = tb_user::where('u_email', $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->u_pwd)) {
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            
            session('email', $user);
            session('u_name', $user->u_name);
            session('u_id', $user->u_id);
            return redirect('product-cust');
        }
    }

    public function profile()
    {
        $cat=tb_productscategory::all();
        $user = tb_user::with('tb_address')->where('u_id', session('user')->u_id)->first();
        return view('customer.profile', compact('user','cat'));
    }

    public function editprofile()
    {
        $cat=tb_productscategory::all();
        $user = tb_user::with('tb_address')->where('u_id', session('user')->u_id)->first();
        return view('customer.editprofile', compact('user','cat'));
    }

    public function updateprofile(Request $req, $id)
    {
        $cat=tb_productscategory::all();
        $user = tb_user::find($id);
        $user->u_name = $req->u_name;
        $user->u_contact = $req->u_contact;
        $user->tb_address->a_line1 = $req->a_line1;
        $user->tb_address->a_line2 = $req->a_line2;
        $user->tb_address->a_city = $req->a_city;
        $user->tb_address->a_postcode = $req->a_postcode;
        $user->tb_address->a_state = $req->a_state;
        $user->tb_address->a_country = $req->a_country;
        $user->update();
        return view('customer.profile',compact('user','cat'));

    }

    public function signout()
    {  
        session()->pull('user');
        session()->forget('user');
        return redirect('signin');
    }

    public function resetpassword()
    {
        return view('customer.resetpassword');
    }
        
}
