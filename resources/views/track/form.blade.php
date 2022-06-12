<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $track->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="album-select">Album title</label>
            <select name="album_id" id="title">
                <option value="0">--Select Album--</option>
                @foreach ($albums as $album)
                    <option value="{{$album->id}}">{{$album->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="media-select">Media Type</label>
            <select name="media_type_id" id="mediaType">
                <option value="0">--Select Media Type--</option>
                @foreach ($mediaTypes as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="genre-select">Genre</label>
            <select name="genre_id" id="genre">
                <option value="">--Select Genre--</option>
                @foreach ($genres as $genre)
                    <option value="">{{$genre->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('composer') }}
            {{ Form::text('composer', $track->composer, ['class' => 'form-control' . ($errors->has('composer') ? ' is-invalid' : ''), 'placeholder' => 'Composer']) }}
            {!! $errors->first('composer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('milliseconds') }}
            {{ Form::text('milliseconds', $track->milliseconds, ['class' => 'form-control' . ($errors->has('milliseconds') ? ' is-invalid' : ''), 'placeholder' => 'Milliseconds']) }}
            {!! $errors->first('milliseconds', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bytes') }}
            {{ Form::text('bytes', $track->bytes, ['class' => 'form-control' . ($errors->has('bytes') ? ' is-invalid' : ''), 'placeholder' => 'Bytes']) }}
            {!! $errors->first('bytes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unit_price') }}
            {{ Form::text('unit_price', $track->unit_price, ['class' => 'form-control' . ($errors->has('unit_price') ? ' is-invalid' : ''), 'placeholder' => 'Unit Price']) }}
            {!! $errors->first('unit_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="javascript:history.back()">Back</a>
    </div>
</div>
