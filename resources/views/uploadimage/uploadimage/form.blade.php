<?php 
    
    $ID = '';
    
    if(isset($_GET['id']))
    {
        $ID = $_GET['id'];
    }

?>


<div class="form-group{{ $errors->has('product') ? 'has-error' : ''}}">
    <label for="product" class="control-label">{{ 'Product' }}</label>
    <input class="form-control" name="product" type="text" id="product" value="<?php if($formMode === 'create'){ echo $ID; }else{ echo $uploadimage->product; } ?>" readonly >
    {!! $errors->first('product', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="dropify" name="image" type="file" id="image" data-default-file="<?php if(isset($uploadimage->image)){ echo asset($uploadimage->image); }else{ echo ''; } ?>" value="<?php if(isset($uploadimage->image)){ echo $uploadimage->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($uploadimage->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


