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


    public function getProcessingServices()
    {
        $services = UserService::where('status', UserService::$STATUS['PROCESSING'])->get();

        return view('admin.customers.processing_services', compact('services'));
    }

    public function getUserServiceDetail($customer_id, $user_service_id)
    {
        $customer = User::findOrFail($customer_id);
        $user_service = UserService::findOrFail($user_service_id);

        if($user_service->user_id != $customer_id) abort(404);

        return view('admin.customers.service_detail'. compact('user_service', 'customer'));

    }
}
