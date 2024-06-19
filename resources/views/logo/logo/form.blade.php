<div class="form-group{{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="<?php if(isset($logo->type)){ echo $logo->type; }else{ echo ''; } ?>" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="dropify" data-default-file="<?php if(isset($logo->image)){ echo asset($logo->image); }else{ echo ''; } ?>" name="image" type="file" id="image" value="<?php if(isset($logo->image)){ echo $logo->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($logo->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


