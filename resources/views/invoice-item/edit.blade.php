@extends('layouts.base')

@section('template_title')
    Update Invoice Item
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title" style="color:#82adfd; font-size: 30px">Update Invoice Item</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('invoice-items.update', $invoiceItem->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('invoice-item.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
