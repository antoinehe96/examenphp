<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label for="customer-select">Customer name</label>
            <select name="customer_id">
                <option value="0">--Select Customer--</option>
                @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->lastname}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('billing_address') }}
            {{ Form::text('billing_address', $invoice->billing_address, ['class' => 'form-control' . ($errors->has('billing_address') ? ' is-invalid' : ''), 'placeholder' => 'Billing Address']) }}
            {!! $errors->first('billing_address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('billing_city') }}
            {{ Form::text('billing_city', $invoice->billing_city, ['class' => 'form-control' . ($errors->has('billing_city') ? ' is-invalid' : ''), 'placeholder' => 'Billing City']) }}
            {!! $errors->first('billing_city', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('billing_state') }}
            {{ Form::text('billing_state', $invoice->billing_state, ['class' => 'form-control' . ($errors->has('billing_state') ? ' is-invalid' : ''), 'placeholder' => 'Billing State']) }}
            {!! $errors->first('billing_state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('billing_country') }}
            {{ Form::text('billing_country', $invoice->billing_country, ['class' => 'form-control' . ($errors->has('billing_country') ? ' is-invalid' : ''), 'placeholder' => 'Billing Country']) }}
            {!! $errors->first('billing_country', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('billing_postal_code') }}
            {{ Form::text('billing_postal_code', $invoice->billing_postal_code, ['class' => 'form-control' . ($errors->has('billing_postal_code') ? ' is-invalid' : ''), 'placeholder' => 'Billing Postal Code']) }}
            {!! $errors->first('billing_postal_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $invoice->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="javascript:history.back()">Back</a>
    </div>
</div>
