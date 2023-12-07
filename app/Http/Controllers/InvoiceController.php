<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Address;
use App\Models\Product;
use PDF;

class InvoiceController extends Controller
{
    public function index()
    {

        return view('invoice.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $invoice = Invoice::create([
            'subtotal' => $request->subtotal,
            'tax_amount' => $request->tax_amount,
            'discount' => $request->discount,
            'total' => $request->total,
        ]);

        #from Address
        $fromAddress = Address::create([
            'name' => $request->from_name,
            'email' => $request->from_email,
            'address' => $request->from_address,
            'phone' => $request->from_phone,
            'gst' => $request->from_gst,
            'invoice_id' => $invoice->id,
            'type' => 'from',
        ]);
    
        #to Address
        $toAddress = Address::create([
            'name' => $request->to_name,
            'email' => $request->to_email,
            'address' => $request->to_address,
            'phone' => $request->to_phone,
            'mobile' => $request->to_mobile,
            'fax' => $request->to_fax,
            'invoice_id' => $invoice->id,
            'type' => 'to',
        ]);
        #product
        $product = Product::create([
            'name' => $request->product_name,
            'description' => $request->product_description,
            'qty' => $request->product_qty,
            'tax' => $request->product_tax,
            'price' => $request->product_price,
            'invoice_id' => $invoice->id,
        ]);
        $pdf = PDF::loadView('invoice.invoice', compact('invoice', 'fromAddress', 'toAddress', 'product'));
        return $pdf->download('invoice.pdf');
    }
}
