<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('invoice_id') }}
            {{ Form::text('invoice_id', $invoiceItem->invoice_id, ['class' => 'form-control' . ($errors->has('invoice_id') ? ' is-invalid' : ''), 'placeholder' => 'Invoice Id']) }}
            {!! $errors->first('invoice_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('track_id') }}
            {{ Form::text('track_id', $invoiceItem->track_id, ['class' => 'form-control' . ($errors->has('track_id') ? ' is-invalid' : ''), 'placeholder' => 'Track Id']) }}
            {!! $errors->first('track_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unit_price') }}
            {{ Form::text('unit_price', $invoiceItem->unit_price, ['class' => 'form-control' . ($errors->has('unit_price') ? ' is-invalid' : ''), 'placeholder' => 'Unit Price']) }}
            {!! $errors->first('unit_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quantity') }}
            {{ Form::text('quantity', $invoiceItem->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="javascript:history.back()">Back</a>
    </div>
</div>
