<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="<?php if(isset($testimonial->name)){ echo $testimonial->name; }else{ echo ''; } ?>" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('designation') ? 'has-error' : ''}}">
    <label for="designation" class="control-label">{{ 'Designation' }}</label>
    <input class="form-control" name="designation" type="text" id="designation" value="<?php if(isset($testimonial->designation)){ echo $testimonial->designation; }else{ echo ''; } ?>" >
    {!! $errors->first('designation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="summernote" rows="5" name="description" type="textarea" id="description" > <?php if(isset($testimonial->description)){ echo $testimonial->description; }else{ echo ''; } ?> </textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="dropify" name="image" type="file" id="image"  data-default-file="<?php if(isset($testimonial->image)){ echo asset($testimonial->image); }else{ echo ''; } ?>" value="<?php if(isset($testimonial->image)){ echo $testimonial->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($testimonial->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


