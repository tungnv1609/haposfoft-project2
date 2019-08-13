<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function listCustomer ()
    {
        $customers = Customer::paginate(3);
        return view('admin.customer.list',['list_customer'=>$customers]);
    }

    public function editCustomer(Customer $customers)
    {
        return view('admin.customer.edit', compact('customer'));
    }

    function  deleteCustomer()
    {

    }

    public function createCustomer ()
    {
        return view('admin.customer.create');
    }
}
