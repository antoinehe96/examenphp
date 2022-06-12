@extends('layouts.base')

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Employee</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Lastname:</strong>
                            {{ $employee->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Firstname:</strong>
                            {{ $employee->firstname }}
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $employee->title }}
                        </div>
                        <div class="form-group">
                            <strong>Reports to:</strong>
                            {{ $employee->reportsto }}
                        </div>
                        <div class="form-group">
                            <strong>Birthdate:</strong>
                            {{date('d-m-Y', strtotime($employee->birthdate))}}
                        </div>
                        <div class="form-group">
                            <strong>Hire date:</strong>
                            {{date('d-m-Y', strtotime($employee->hiredate))}}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $employee->address }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $employee->city }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $employee->state }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $employee->country }}
                        </div>
                        <div class="form-group">
                            <strong>Postalcode:</strong>
                            {{ $employee->postalcode }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $employee->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Fax:</strong>
                            {{ $employee->fax }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $employee->email }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
