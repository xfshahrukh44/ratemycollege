<div class="form-group{{ $errors->has('order_id') ? 'has-error' : ''}}">
    <label for="order_id" class="control-label">{{ 'Order Id' }}</label>
    <input class="form-control" name="order_id" type="text" id="order_id" value="<?php if(isset($orderproduct->order_id)){ echo $orderproduct->order_id; }else{ echo ''; } ?>" >
    {!! $errors->first('order_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_product_id') ? 'has-error' : ''}}">
    <label for="order_product_id" class="control-label">{{ 'Order Product Id' }}</label>
    <input class="form-control" name="order_product_id" type="text" id="order_product_id" value="<?php if(isset($orderproduct->order_product_id)){ echo $orderproduct->order_product_id; }else{ echo ''; } ?>" >
    {!! $errors->first('order_product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_product_name') ? 'has-error' : ''}}">
    <label for="order_product_name" class="control-label">{{ 'Order Product Name' }}</label>
    <input class="form-control" name="order_product_name" type="text" id="order_product_name" value="<?php if(isset($orderproduct->order_product_name)){ echo $orderproduct->order_product_name; }else{ echo ''; } ?>" >
    {!! $errors->first('order_product_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_product_price') ? 'has-error' : ''}}">
    <label for="order_product_price" class="control-label">{{ 'Order Product Price' }}</label>
    <input class="form-control" name="order_product_price" type="text" id="order_product_price" value="<?php if(isset($orderproduct->order_product_price)){ echo $orderproduct->order_product_price; }else{ echo ''; } ?>" >
    {!! $errors->first('order_product_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_product_qty') ? 'has-error' : ''}}">
    <label for="order_product_qty" class="control-label">{{ 'Order Product Qty' }}</label>
    <input class="form-control" name="order_product_qty" type="text" id="order_product_qty" value="<?php if(isset($orderproduct->order_product_qty)){ echo $orderproduct->order_product_qty; }else{ echo ''; } ?>" >
    {!! $errors->first('order_product_qty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_product_subtotal') ? 'has-error' : ''}}">
    <label for="order_product_subtotal" class="control-label">{{ 'Order Product Subtotal' }}</label>
    <input class="form-control" name="order_product_subtotal" type="text" id="order_product_subtotal" value="<?php if(isset($orderproduct->order_product_subtotal)){ echo $orderproduct->order_product_subtotal; }else{ echo ''; } ?>" >
    {!! $errors->first('order_product_subtotal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('order_user_id') ? 'has-error' : ''}}">
    <label for="order_user_id" class="control-label">{{ 'Order User Id' }}</label>
    <input class="form-control" name="order_user_id" type="text" id="order_user_id" value="<?php if(isset($orderproduct->order_user_id)){ echo $orderproduct->order_user_id; }else{ echo ''; } ?>" >
    {!! $errors->first('order_user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('variation_price') ? 'has-error' : ''}}">
    <label for="variation_price" class="control-label">{{ 'Variation Price' }}</label>
    <input class="form-control" name="variation_price" type="text" id="variation_price" value="<?php if(isset($orderproduct->variation_price)){ echo $orderproduct->variation_price; }else{ echo ''; } ?>" >
    {!! $errors->first('variation_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('variants') ? 'has-error' : ''}}">
    <label for="variants" class="control-label">{{ 'Variants' }}</label>
    <input class="form-control" name="variants" type="text" id="variants" value="<?php if(isset($orderproduct->variants)){ echo $orderproduct->variants; }else{ echo ''; } ?>" >
    {!! $errors->first('variants', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="text" id="image" value="<?php if(isset($orderproduct->image)){ echo $orderproduct->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($orderproduct->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


