<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Get all the customers
     */
    public function getCustomers()
    {
        $customers = User::all();
        return view('admin.customers.index', compact('customers'));
    }

    public function getCustomerDetail($customer_id)
    {
        $customer = User::findOrFail($customer_id);
        return view('admin.customers.detail', compact('customer'));
    }

    public function getCustomerServices()
    {

    }
}
