@extends('layouts.base')

@section('template_title')
    {{ $invoice->name ?? 'Show Invoice' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Invoice</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Customer Id:</strong>
                            {{ $invoice->customer_id }}
                        </div>
                        <div class="form-group">
                            <strong>Invoice Date:</strong>

                            {{date('d-m-Y', strtotime($invoice->invoice_date))}}
                        </div>
                        <div class="form-group">
                            <strong>Billing Address:</strong>
                            {{ $invoice->billing_address }}
                        </div>
                        <div class="form-group">
                            <strong>Billing City:</strong>
                            {{ $invoice->billing_city }}
                        </div>
                        <div class="form-group">
                            <strong>Billing State:</strong>
                            {{ $invoice->billing_state }}
                        </div>
                        <div class="form-group">
                            <strong>Billing Country:</strong>
                            {{ $invoice->billing_country }}
                        </div>
                        <div class="form-group">
                            <strong>Billing Postal Code:</strong>
                            {{ $invoice->billing_postal_code }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $invoice->total }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
