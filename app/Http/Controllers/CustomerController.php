<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function show()
    {
        $customers = Customer::orderBy('lastname')->get();

        return view('customer', ['customer' => $customers]);
    }
}
