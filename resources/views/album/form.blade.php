<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $album->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="artist-select">Artist name</label>
            <select name="artist_id">
                <option value="0">--Select Artist--</option>
                @foreach ($artists as $artist)
                    <option value="{{$artist->id}}">{{$artist->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="javascript:history.back()">Back</a>
    </div>
</div>
