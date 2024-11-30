<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function customerProfile()
    {
        return view('frontend.customerProfile');
    }

    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'customer_name'=> 'required',
            'customer_email'=> 'required | email',
            'password'=> 'required | confirmed | min:6',
            'monile_number'=> 'required | numeric',
            'address'=> 'required',
            ]);
            if ($validation->fails())
            {
                notify()->error($validation->getMessageBag());
                return redirect()->back();
            }

            Customer::create([
                'name'=> $request->customer_name,
                'email'=> $request->customer_email,
                'password'=> bcrypt($request->customer_password),
                'mobile'=> $request->customer_mobile,
                'address'=> $request->customer_address,

            ]);
            notify()->success('Customer Registration Successful');
            return redirect()->back();


    }
       public function login(Request $request)
       {
        $validator = Validator::make($request->all(), [
            'email'=> 'required | email',
            'password'=> 'required | min:6',

        ]);

        if ($validator->fails())
        {
            notify()->error($validator->getMessageBag());
        }
       }



}
