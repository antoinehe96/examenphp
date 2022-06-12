@extends('layouts.base')

@section('template_title')
    {{ $mediaType->name ?? 'Show Media Type' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Media Type</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $mediaType->name }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('media-types.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
