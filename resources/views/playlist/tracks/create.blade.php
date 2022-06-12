@extends('layouts.base')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title" style="color:#82adfd; font-size: 30px">Add track</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('playlists.tracks.store',$track->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <select name="track_id" id="track">
                                <option value="0">--Select Track--</option>
                                @foreach ($tracks as $track)
                                    <option value="{{$track->id}}">{{$track->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('playlists.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
