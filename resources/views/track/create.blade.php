@extends('layouts.base')

@section('template_title')
    Create Track
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title" style="color:#82adfd; font-size: 30px">Create New Track</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tracks.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('track.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
