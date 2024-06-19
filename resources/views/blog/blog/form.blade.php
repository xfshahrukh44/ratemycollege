<div class="form-group{{ $errors->has('blogname') ? 'has-error' : ''}}">
    <label for="blogname" class="control-label">{{ 'Blogname' }}</label>
    <input class="form-control" name="blogname" type="text" id="blogname" value="<?php if(isset($blog->blogname)){ echo $blog->blogname; }else{ echo ''; } ?>" >
    {!! $errors->first('blogname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('blogshortdescription') ? 'has-error' : ''}}">
    <label for="blogshortdescription" class="control-label">{{ 'Blogshortdescription' }}</label>
    <textarea class="summernote" rows="5" name="blogshortdescription" type="textarea" id="blogshortdescription" > <?php if(isset($blog->blogshortdescription)){ echo $blog->blogshortdescription; }else{ echo ''; } ?> </textarea>
    {!! $errors->first('blogshortdescription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('bloglongdescription') ? 'has-error' : ''}}">
    <label for="bloglongdescription" class="control-label">{{ 'Bloglongdescription' }}</label>
    <textarea class="summernote" rows="5" name="bloglongdescription" type="textarea" id="bloglongdescription" > <?php if(isset($blog->bloglongdescription)){ echo $blog->bloglongdescription; }else{ echo ''; } ?> </textarea>
    {!! $errors->first('bloglongdescription', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="dropify" name="image" type="file" id="image" data-default-file="<?php if(isset($blog->image)){ echo asset($blog->image); }else{ echo ''; } ?>" value="<?php if(isset($blog->image)){ echo $blog->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($blog->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


