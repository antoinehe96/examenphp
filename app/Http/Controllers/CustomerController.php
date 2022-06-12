<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Genre;
use App\Models\MediaType;
use App\Models\Track;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class CustomerController
 * @package App\Http\Controllers
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $customers = Customer::orderBy('lastname')-> paginate();
        return view('customer.index', compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * $customers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view ('customer.create')
            ->with ('employees', Employee::orderby('lastname','asc')->get(['id','lastname']))
            ->with('customer', new Customer());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(Customer::$rules);

        $customer = Customer::create($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show(Customer $customer)
    {
        return view('customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit(Customer $customer)
    {
        return view ('customer.edit')
            ->with ('employees', Employee::orderby('lastname','asc')->get(['id','lastname']))
            ->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Customer $customer
     * @return RedirectResponse
     */
    public function update(Request $request, Customer $customer)
    {
        request()->validate(Customer::$rules);

        $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->invoices()->delete();
        $customer->delete();
        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully');
    }
}
