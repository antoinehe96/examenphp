@extends('layouts.base')

@section('template_title')
    {{ $customer->name ?? 'Show Customer' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Customer</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Firstname:</strong>
                            {{ $customer->firstname }}
                        </div>
                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $customer->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Company:</strong>
                            {{ $customer->company }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $customer->address }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $customer->city }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $customer->state }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $customer->country }}
                        </div>
                        <div class="form-group">
                            <strong>Postalcode:</strong>
                            {{ $customer->postalcode }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $customer->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Fax:</strong>
                            {{ $customer->fax }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $customer->email }}
                        </div>
                        <div class="form-group">
                            <strong>Employee Id:</strong>
                            {{ $customer->employee_id }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
