@extends('layouts.base')

@section('template_title')
    {{ $invoiceItem->name ?? 'Show Invoice Item' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Invoice Item</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Invoice Id:</strong>
                            {{ $invoiceItem->invoice_id }}
                        </div>
                        <div class="form-group">
                            <strong>Track Id:</strong>
                            {{ $invoiceItem->track->name }}
                        </div>
                        <div class="form-group">
                            <strong>Unit Price:</strong>
                            {{ $invoiceItem->unit_price }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $invoiceItem->quantity }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('invoice-items.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
