<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomer(){
        $getCustomer = Customer::all();
        return response()->json([
            'data' => $getCustomer
        ],200);
    }

    public function addCustomer(Request $request){
        $customer = Customer::create([
            'name' => $request->nama,
            'phone' => $request->nomer,
            'faculty' => $request->fakultas,
            'order' => $request->pesanan,
            'note' => $request->note
        ]);

        return response()->json([
            $customer
        ],200);


    }
}
