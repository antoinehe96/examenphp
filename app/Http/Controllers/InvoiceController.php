<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Track;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class InvoiceController
 * @package App\Http\Controllers
 */
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $invoices = Invoice::orderBy('invoice_date', 'desc')-> paginate();

        return view('invoice.index', compact('invoices'))
            ->with('i', (request()->input('page', 1) - 1) * $invoices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('invoice.create')
            ->with ('customers', Customer::orderby('lastname','asc')->get(['id','lastname']))
            ->with('invoice', new Invoice());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(Invoice::$rules);
        $request->merge(['invoice_date' => Carbon::now()]);
        $invoice = Invoice::create($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Invoice $invoice
     * @return Application|Factory|View
     */
    public function show(Invoice $invoice)
    {
        return view('invoice.show', ['invoice' => $invoice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);

        return view('invoice.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Invoice $invoice
     * @return RedirectResponse
     */
    public function update(Request $request, Invoice $invoice)
    {
        request()->validate(Invoice::$rules);

        $invoice->update($request->all());

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();

        return redirect()->route('invoices.index')
            ->with('success', 'Invoice deleted successfully');
    }
}
