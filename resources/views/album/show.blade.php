@extends('layouts.base')

@section('template_title')
    {{ $album->name ?? 'Show Album' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Album</span>
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $album->title }}
                        </div>
                        <div class="form-group">
                            <strong>Artist Name:</strong>
                            {{ $album->artist->name }}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('albums.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
