<div class="form-group{{ $errors->has('first_name') ? 'has-error' : ''}}">
    <label for="first_name" class="control-label">{{ 'first_name Name' }}</label>
    <input class="form-control" name="first_name" type="text" id="first_name" value="<?php if(isset($order->first_name)){ echo $order->first_name; }else{ echo ''; } ?>" >
    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('country') ? 'has-error' : ''}}">
    <label for="country" class="control-label">{{ 'Country' }}</label>
    <input class="form-control" name="country" type="text" id="country" value="<?php if(isset($order->country)){ echo $order->country; }else{ echo ''; } ?>" >
    {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('city') ? 'has-error' : ''}}">
    <label for="city" class="control-label">{{ 'City' }}</label>
    <input class="form-control" name="city" type="text" id="city" value="<?php if(isset($order->city)){ echo $order->city; }else{ echo ''; } ?>" >
    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('state') ? 'has-error' : ''}}">
    <label for="state" class="control-label">{{ 'State' }}</label>
    <input class="form-control" name="state" type="text" id="state" value="<?php if(isset($order->state)){ echo $order->state; }else{ echo ''; } ?>" >
    {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="<?php if(isset($order->address)){ echo $order->address; }else{ echo ''; } ?>" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('zipcode') ? 'has-error' : ''}}">
    <label for="zipcode" class="control-label">{{ 'Zipcode' }}</label>
    <input class="form-control" name="zipcode" type="text" id="zipcode" value="<?php if(isset($order->zipcode)){ echo $order->zipcode; }else{ echo ''; } ?>" >
    {!! $errors->first('zipcode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('phoneno') ? 'has-error' : ''}}">
    <label for="phoneno" class="control-label">{{ 'Phoneno' }}</label>
    <input class="form-control" name="phoneno" type="text" id="phoneno" value="<?php if(isset($order->phoneno)){ echo $order->phoneno; }else{ echo ''; } ?>" >
    {!! $errors->first('phoneno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('qty') ? 'has-error' : ''}}">
    <label for="qty" class="control-label">{{ 'Qty' }}</label>
    <input class="form-control" name="qty" type="text" id="qty" value="<?php if(isset($order->qty)){ echo $order->qty; }else{ echo ''; } ?>" >
    {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'Total' }}</label>
    <input class="form-control" name="total" type="text" id="total" value="<?php if(isset($order->total)){ echo $order->total; }else{ echo ''; } ?>" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="<?php if(isset($order->user_id)){ echo $order->user_id; }else{ echo ''; } ?>" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_email') ? 'has-error' : ''}}">
    <label for="order_email" class="control-label">{{ 'Order Email' }}</label>
    <input class="form-control" name="order_email" type="text" id="order_email" value="<?php if(isset($order->order_email)){ echo $order->order_email; }else{ echo ''; } ?>" >
    {!! $errors->first('order_email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_status') ? 'has-error' : ''}}">
    <label for="order_status" class="control-label">{{ 'Order Status' }}</label>
    <input class="form-control" name="order_status" type="text" id="order_status" value="<?php if(isset($order->order_status)){ echo $order->order_status; }else{ echo ''; } ?>" >
    {!! $errors->first('order_status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_notes') ? 'has-error' : ''}}">
    <label for="order_notes" class="control-label">{{ 'Order Notes' }}</label>
    <input class="form-control" name="order_notes" type="text" id="order_notes" value="<?php if(isset($order->order_notes)){ echo $order->order_notes; }else{ echo ''; } ?>" >
    {!! $errors->first('order_notes', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_company') ? 'has-error' : ''}}">
    <label for="order_company" class="control-label">{{ 'Order Company' }}</label>
    <input class="form-control" name="order_company" type="text" id="order_company" value="<?php if(isset($order->order_company)){ echo $order->order_company; }else{ echo ''; } ?>" >
    {!! $errors->first('order_company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('transaction_id') ? 'has-error' : ''}}">
    <label for="transaction_id" class="control-label">{{ 'Transaction Id' }}</label>
    <input class="form-control" name="transaction_id" type="text" id="transaction_id" value="<?php if(isset($order->transaction_id)){ echo $order->transaction_id; }else{ echo ''; } ?>" >
    {!! $errors->first('transaction_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('card_token') ? 'has-error' : ''}}">
    <label for="card_token" class="control-label">{{ 'Card Token' }}</label>
    <input class="form-control" name="card_token" type="text" id="card_token" value="<?php if(isset($order->card_token)){ echo $order->card_token; }else{ echo ''; } ?>" >
    {!! $errors->first('card_token', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('invoice_number') ? 'has-error' : ''}}">
    <label for="invoice_number" class="control-label">{{ 'Invoice Number' }}</label>
    <input class="form-control" name="invoice_number" type="text" id="invoice_number" value="<?php if(isset($order->invoice_number)){ echo $order->invoice_number; }else{ echo ''; } ?>" >
    {!! $errors->first('invoice_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('payment_method') ? 'has-error' : ''}}">
    <label for="payment_method" class="control-label">{{ 'Payment Method' }}</label>
    <input class="form-control" name="payment_method" type="text" id="payment_method" value="<?php if(isset($order->payment_method)){ echo $order->payment_method; }else{ echo ''; } ?>" >
    {!! $errors->first('payment_method', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($order->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


