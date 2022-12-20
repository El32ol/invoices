<?php

namespace App\Http\Controllers;

use App\Models\invoice_attachments;
use App\Models\invoice_details;
use App\Models\invoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function show(invoice_details $invoice_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = invoices::where('id',$id)->first();
        $details = invoice_details::where('id_Invoice' ,$id)->get(); 
        $attachment = invoice_attachments::where('invoice_id' ,$id)->get();
        return view('invoices.invoices_details', compact('invoice','details','attachment'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice_details $invoice_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice_details  $invoice_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice_details $invoice_details)
    {
        //
    }


}
