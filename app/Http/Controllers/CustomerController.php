<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\CreateCustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function index()
    {
        $customers = Customer::paginate(9);
        return view('admin.customer.list', ['list_customer' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCustomerRequest $request)
    {
        Customer::create($request->all());
        return redirect()->route('customer.index')
            ->with('success', 'customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $data = [
            'customer' => $customer,
        ];
        return view('admin.customer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customer.index')->with('message', __('messages.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')
            ->with('success', 'customer deleted successfully');
    }
}
