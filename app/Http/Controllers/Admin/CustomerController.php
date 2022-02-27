<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $customerservices = UserService::where('user_id', $customer_id)->get();
        // dd($customerservices);
        return view('admin.customers.detail', compact('customer', 'customerservices'));
    }


    public function getCustomerServices($customer_id)
    {
        $user = Auth::user();
        $services = UserService::where('user_id', $user->id)->get();
        return view('admin.customers.services', compact('services'));
    }
}
