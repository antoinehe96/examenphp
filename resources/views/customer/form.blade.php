<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('firstname') }}
            {{ Form::text('firstname', $customer->firstname, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : ''), 'placeholder' => 'Firstname']) }}
            {!! $errors->first('firstname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastname') }}
            {{ Form::text('lastname', $customer->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'placeholder' => 'Lastname']) }}
            {!! $errors->first('lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('company') }}
            {{ Form::text('company', $customer->company, ['class' => 'form-control' . ($errors->has('company') ? ' is-invalid' : ''), 'placeholder' => 'Company']) }}
            {!! $errors->first('company', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $customer->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $customer->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $customer->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('country') }}
            {{ Form::text('country', $customer->country, ['class' => 'form-control' . ($errors->has('country') ? ' is-invalid' : ''), 'placeholder' => 'Country']) }}
            {!! $errors->first('country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('postalcode') }}
            {{ Form::text('postalcode', $customer->postalcode, ['class' => 'form-control' . ($errors->has('postalcode') ? ' is-invalid' : ''), 'placeholder' => 'Postalcode']) }}
            {!! $errors->first('postalcode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $customer->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fax') }}
            {{ Form::text('fax', $customer->fax, ['class' => 'form-control' . ($errors->has('fax') ? ' is-invalid' : ''), 'placeholder' => 'Fax']) }}
            {!! $errors->first('fax', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $customer->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="employee-select">Employee Name</label>
            <select name="employee_id">
                <option value="0">--Select Employee--</option>
                @foreach ($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->lastname}}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="javascript:history.back()">Back</a>
    </div>
</div>
