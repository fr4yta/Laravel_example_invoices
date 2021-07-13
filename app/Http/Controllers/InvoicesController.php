<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller {
    public function index() {
        $invoices = Invoice::with('customer')->get();
        return view('invoices.index', ['invoices' => $invoices]);
    }

    public function create() {
        $customers = \App\Models\Customer::all();
        return view('invoices.create', ['customers' => $customers]);
    }

    public function store(InvoiceStoreRequest $request) {
        $invoice = new Invoice();

        $invoice->number = $request->nr_faktury;
        $invoice->date = $request->date;
        $invoice->total = $request->kwota;
        $invoice->customer_id = $request->customer_id;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura dodana poprawnie.');
    }

    public function edit($id) {
        $invoice = Invoice::find($id);
        return view('invoices.edit', ['invoice' => $invoice]);
    }

    public function update($id, Request $request) {
        $invoice = Invoice::find($id);

        $invoice->number = $request->nr_faktury;
        $invoice->date = $request->date;
        $invoice->total = $request->kwota;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura zmieniona poprawnie.');
    }

    public function delete($id) {
        $invoice = Invoice::destroy($id);

        return redirect()->route('invoices.index')->with('message', 'Faktura usunięta poprawnie.');
    }
}
