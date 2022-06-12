@extends('layouts.base')

@section('template_title')
    {{ $genre->name ?? 'Show Genre' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Genre</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $genre->name }}
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('genres.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
