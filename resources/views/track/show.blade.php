@extends('layouts.base')

@section('template_title')
    {{ $track->name ?? 'Show Track' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Track</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $track->name }}
                        </div>
                        <div class="form-group">
                            <strong>Album Id:</strong>
                            {{ $track->album_id }}
                        </div>
                        <div class="form-group">
                            <strong>Media Type Id:</strong>
                            {{ $track->media_type_id }}
                        </div>
                        <div class="form-group">
                            <strong>Genre Id:</strong>
                            {{ $track->genre_id }}
                        </div>
                        <div class="form-group">
                            <strong>Composer:</strong>
                            {{ $track->composer }}
                        </div>
                        <div class="form-group">
                            <strong>Milliseconds:</strong>
                            {{ $track->milliseconds }}
                        </div>
                        <div class="form-group">
                            <strong>Bytes:</strong>
                            {{ $track->bytes }}
                        </div>
                        <div class="form-group">
                            <strong>Unit Price:</strong>
                            {{ $track->unit_price }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tracks.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
