<?php 

    $get_category = DB::table('categories')->where('status','1')->get(); 
    
    $get_subcategory = DB::table('subcategories')->where('status','1')->get(); 
    
?> 


<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="slug-source" value="<?php if(isset($product->title)){ echo $product->title; }else{ echo ''; } ?>" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Slug' }}</label>
    <input class="form-control" name="slug" type="text" id="slug-target" value="{{ isset($section->slug) ? $section->slug : ''; }}" readonly>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <!--<input class="form-control" name="category" type="text" id="category" value="<?php if(isset($product->category)){ echo $product->category; }else{ echo ''; } ?>" >-->
    <!--{!! $errors->first('category', '<p class="help-block">:message</p>') !!}-->
    
    <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" name="category" type="text" id="category" >
        <?php foreach($get_category as $key => $val_category){ ?>
        <option value="{{ $val_category->id }}"> {{ $val_category->name }} </option>
        <?php } ?>
    </select>
    
</div>


<div class="form-group{{ $errors->has('subcategory') ? 'has-error' : ''}}">
    <label for="subcategory" class="control-label"> Subcategory </label>
    <select class="form-control select2 select2-info" data-dropdown-css-class="select2-info" name="subcategory" id="subcategory" >
        <option value="0"> No Sub Category </option>
        <?php foreach($get_subcategory as $key => $val_subcategory){ ?>
        <option <?php if($val_subcategory->id == isset($product->subcategory)){echo 'selected'; }else{ echo '';} ?>  value="{{ $val_subcategory->id }}"> {{ $val_subcategory->name }} </option>
        <?php } ?>
    </select>
</div>


<div class="form-group{{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label">{{ 'Price' }}</label>
    <input class="form-control" name="price" type="text" id="price" value="<?php if(isset($product->price)){ echo $product->price; }else{ echo ''; } ?>" >
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('oldprice') ? 'has-error' : ''}}">
    <label for="oldprice" class="control-label">{{ 'Oldprice' }}</label>
    <input class="form-control" name="oldprice" type="text" id="oldprice" value="<?php if(isset($product->oldprice)){ echo $product->oldprice; }else{ echo ''; } ?>" >
    {!! $errors->first('oldprice', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('shortdescription') ? 'has-error' : ''}}">
    <label for="shortdescription" class="control-label">{{ 'Shortdescription' }}</label>
    <textarea class="summernote" rows="5" name="shortdescription" type="textarea" id="shortdescription" > <?php if(isset($product->shortdescription)){ echo $product->shortdescription; }else{ echo ''; } ?> </textarea>
    {!! $errors->first('shortdescription', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('longdescription') ? 'has-error' : ''}}">
    <label for="longdescription" class="control-label">{{ 'Longdescription' }}</label>
    <textarea class="summernote" rows="5" name="longdescription" type="textarea" id="longdescription" > <?php if(isset($product->longdescription)){ echo $product->longdescription; }else{ echo ''; } ?> </textarea>
    {!! $errors->first('longdescription', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('sku') ? 'has-error' : ''}}">
    <label for="sku" class="control-label">{{ 'Sku' }}</label>
    <input class="form-control" name="sku" type="text" id="sku" value="<?php if(isset($product->sku)){ echo $product->sku; }else{ echo ''; } ?>" >
    {!! $errors->first('sku', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group{{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'quantity' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="<?php if(isset($product->quantity)){ echo $product->quantity; }else{ echo ''; } ?>" >
    {!! $errors->first('quantity', '<p class="help-block">:Quantity</p>') !!}
</div>

<div class="form-group{{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="dropify" name="image" type="file" id="image" data-default-file="<?php if(isset($product->image)){ echo asset($product->image); }else{ echo ''; } ?>" value="<?php if(isset($product->image)){ echo $product->image; }else{ echo ''; } ?>" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($product->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
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
