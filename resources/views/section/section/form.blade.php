<?php 

    $st = ''; 
    $img = '';
    
    if(isset($section->type) != null)
    {
        $st = $section->type;
        $img = $section->value;
    }
    
    $page = ''; 
    
    if(isset($section->type) != null)
    {
        $page = $section->page_id;
    }
    
    $get_pages = DB::table('pages')->get();
    

    
?>


<div class="form-group{{ $errors->has('label') ? 'has-error' : ''}}">
    <label for="label" class="control-label">{{ 'label' }}</label>
    <input class="form-control" name="label" type="text" id="slug-source" value="{{ isset($section->label) ? $section->label : ''; }}" >
    {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group{{ $errors->has('slug') ? 'has-error' : ''}}">
    <label for="slug" class="control-label">{{ 'Slug' }}</label>
    <input class="form-control" name="slug" type="text" id="slug-target" value="{{ isset($section->slug) ? $section->slug : ''; }}" readonly>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <select name="type" id="sel_type" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" style="width: 100%;">
        <option value="empty"> Select Type </option>
        <option <?php if($st == 'text'){echo 'selected';}else{echo '';} ?> > text </option>
        <option <?php if($st == 'textarea'){echo 'selected';}else{echo '';} ?> > textarea </option>
        <option <?php if($st == 'image'){echo 'selected';}else{echo '';} ?> > image </option>
    </select>    
</div>



<!-- START -->

<div class="form-group" id="text_sec">
    <label for="value" class="control-label">{{ 'Value' }}</label>
    <input class="form-control" name="value_text" type="text" id="value" value="<?php if(isset($section->value)){ echo $section->value; }else{ echo ''; } ?>" >
</div>


<!---->


<div class="col-sm-12" id="textarea_sec">
    <div class="form-group">
      <label> Value </label>
      <textarea class="summernote" name="value_textarea" > 
         {{ ($st != '') ? $section->value : ''; }}
      </textarea>
    </div>
</div>


<!---->


  <div class="form-group" id="image_sec">
    <label for="exampleInputEmail1"> Value </label>
    <input type="file" name="image"  id="input-file-now" class="dropify" data-default-file="{{ ($img != '') ? asset($section->value) : ''; }}"  value="" />
  </div>

<!-- END -->


<div class="form-group">
    <label> Select Page </label>
    <select name="page_id" class="form-control select2 select2-info" data-dropdown-css-class="select2-info" id="page_id" style="width: 100%;">
        <option> Select Page </option>
        <?php foreach($get_pages as $key => $val_get_page){ ?>
            <option <?php if($page == $val_get_page->id){echo 'selected';}else{echo '';} ?> value="{{ $val_get_page->id }}"> {{ $val_get_page->title }} </option>
        <?php } ?>
    </select>    
</div>   


<hr>

    <div class="form-group">
        <label>Status</label>
        <br>
        <input type="checkbox" name="status" <?php if(isset($section->status) == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
    </div>

<hr>


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
         
        var get_sel_val = $('#sel_type').val();
          
        if(get_sel_val == 'empty')
        {
        
            $('#text_sec').hide();
            $('#textarea_sec').hide();
            $('#image_sec').hide();
        
        }
        else if(get_sel_val == 'text')
        {
            
            $('#text_sec').show();
            $('#textarea_sec').hide();
            $('#image_sec').hide();
            
        }
        else if(get_sel_val == 'textarea')
        {
            
            $('#text_sec').hide();
            $('#textarea_sec').show();
            $('#image_sec').hide();
            
        }
        else if(get_sel_val == 'image')
        {
            
            $('#text_sec').hide();
            $('#textarea_sec').hide();
            $('#image_sec').show();
            
        }
        
        
                  
        $('#sel_type').change(function(){
            
    
            var get_sel_val = $('#sel_type').val();
            
            if(get_sel_val == 'empty')
            {
                
                $('#text_sec').hide();
                $('#textarea_sec').hide();
                $('#image_sec').hide();
        
                
            }
            else if(get_sel_val == 'text')
            {
                
                $('#text_sec').show(1000);
                $('#textarea_sec').hide();
                $('#image_sec').hide();
                
                
            }
            else if(get_sel_val == 'textarea')
            {
                
                $('#text_sec').hide();
                $('#textarea_sec').show(1000);
                $('#image_sec').hide();
        
        
            }
            else if(get_sel_val == 'image')
            {
                
                $('#text_sec').hide();
                $('#textarea_sec').hide();
                $('#image_sec').show(1000);
                
                
            }
            
            
        });    
         
          
         
          

    });


</script>