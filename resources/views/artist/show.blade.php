@extends('layouts.base')

@section('template_title')
    {{ $artist->name ?? 'Show Artist' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Artist</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{$artist->id}}<br>
                            <strong>Name:</strong>
                            {{ $artist->name }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('artists.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
