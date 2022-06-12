@extends('layouts.base')

@section('template_title')
    Create Genre
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title" style="color:#82adfd; font-size: 30px">Create New Genre</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('genres.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('genre.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
