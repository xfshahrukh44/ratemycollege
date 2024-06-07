<?php $get_category = DB::table('categories')->where('status','1')->get(); ?>

<div class="form-group{{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category" class="control-label"> Category </label>
    <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" name="category_id" type="text" id="category_id" >
        <?php foreach($get_category as $key => $val_category){ ?>
            <option <?php if(isset($subcategory->category_id) == $val_category->id){echo 'selected';}else{echo '';} ?> value="{{ $val_category->id }}"> {{ $val_category->name }} </option>
        <?php } ?>
    </select>
    
</div>

<div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="slug-source" value="<?php if(isset($subcategory->name)){ echo $subcategory->name; }else{ echo ''; } ?>" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Slug' }}</label>
    <input class="form-control" name="slug" type="text" id="slug-target" value="<?php if(isset($subcategory->slug)){ echo $subcategory->slug; }else{ echo ''; } ?>" readonly>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="dropify" name="image" type="file"  id="image" data-default-file="<?php if(isset($subcategory->image)){ echo asset($subcategory->image); }else{ echo ''; } ?>" value="<?php if(isset($subcategory->image)){ echo $subcategory->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($subcategory->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
 
    $(document).ready(function() {
          
        $('.summernote').summernote();

        $('#slug-source').keyup(function(){

        var a = document.getElementById("slug-source").value;

        var b = a.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');

        document.getElementById("slug-target").value = b;

        });
        
    });
    
</script>