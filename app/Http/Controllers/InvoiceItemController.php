<?php

namespace App\Http\Controllers;

use App\Models\InvoiceItem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

/**
 * Class InvoiceItemController
 * @package App\Http\Controllers
 */
class InvoiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $invoiceItems = InvoiceItem::paginate();

        return view('invoice-item.index', compact('invoiceItems'))
            ->with('i', (request()->input('page', 1) - 1) * $invoiceItems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $invoiceItem = new InvoiceItem();
        return view('invoice-item.create', compact('invoiceItem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate(InvoiceItem::$rules);

        $invoiceItem = InvoiceItem::create($request->all());

        return redirect()->route('invoice-items.index')
            ->with('success', 'InvoiceItem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $invoiceItem = InvoiceItem::find($id);

        return view('invoice-item.show', compact('invoiceItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $invoiceItem = InvoiceItem::find($id);

        return view('invoice-item.edit', compact('invoiceItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  InvoiceItem $invoiceItem
     * @return RedirectResponse
     */
    public function update(Request $request, InvoiceItem $invoiceItem)
    {
        request()->validate(InvoiceItem::$rules);

        $invoiceItem->update($request->all());

        return redirect()->route('invoice-items.index')
            ->with('success', 'InvoiceItem updated successfully');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $invoiceItem = InvoiceItem::findOrFail($id);
        $invoiceItem->delete();

        return redirect()->route('invoice-items.index')
            ->with('success', 'InvoiceItem deleted successfully');
    }
}
