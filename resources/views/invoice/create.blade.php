@extends('layouts.base')

@section('template_title')
    Create Invoice
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title" style="color:#82adfd; font-size: 30px">Create New Invoice</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('invoices.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('invoice.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
