@extends('layouts.base')

@section('template_title')
    {{ $playlist->name ?? 'Show Playlist' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="color:#82adfd; font-size: 30px">Show Playlist</span>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $playlist->name }}
                            <a href="{{ route('/playlist/tracks',$playlist->id) }}">
                            <button type="submit" style="width:300px; height: 60px"></i>Add track to this Playlist</button>
                            </a>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('playlists.index') }}"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
