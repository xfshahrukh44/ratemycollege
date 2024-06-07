
<?php 

    $id = Request::segment(3);
    // $get_pages = DB::table('pages')->where('id',$id)->first(); 
    // // dd($get_pages);
    
    // $page_image = "";
    // if($get_pages)
    // {
    //     $page_image = asset($get_pages->image);
    // }
    // else
    // {
    //     $page_image = "";
    // }
    
    
    
    $get_section = DB::table('sections')->where('page_id',$id)->get(); 
    // dump($get_section);

?>
    

<div class="form-group{{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Page Title', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ['class' => 'summernote']) !!}
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="col-md-12">
    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        <input type="file" name="image" id="input-file-now" class="dropify" data-default-file="<?php if(isset($page->image)){ echo asset($page->image); }else{ echo ''; } ?>"  value="<?php if(isset($page->image)){ echo $page->image; }else{ echo ''; } ?>" />
    </div>
</div>



<?php if($get_section) { ?>


<?php foreach($get_section as $key => $section){ ?>

    
    <?php if($section->type == "text"){ ?>
        
        <hr/>
        
        <div class="form-group">
            <label for="exampleInputEmail1"> {{ $section->label }} </label>
            <input name="{{ $section->slug }}" class="form-control" type="text" value="{{$section->value}}" />
        </div>
        
    <?php }else if($section->type == "textarea"){ ?>
    
        <hr/>
    
        <div class="form-group">
            <label for="exampleInputEmail1"> {{ $section->label }} </label>
            <textarea class="summernote" name="{{ $section->slug }}" > 
                  {{ $section->value }}
            </textarea>
        </div>
        
    <?php }else if($section->type == "image"){ ?>
     
        <hr/>
    
        <div class="form-group">
            <label for="exampleInputEmail1"> {{ $section->label }} </label>
            <input type="file" name="{{ $section->slug }}" id="input-file-now" class="dropify" data-default-file="{{ asset($section->value) }}"  value="" />
        </div>

    <?php }else if($section->type){ ?>
    
        <hr/>
    
        <div class="form-group">
            <label for="exampleInputEmail1"> {{ $section->label }} </label>
            <input type="file" name="{{ $section->slug }}" id="input-file-now" class="dropify" data-default-file="{{ $section->value }}"  value="" />
        </div>
    
    <?php } ?>
        
   
<?php } ?>


<?php } ?>



<hr>

    <div class="form-group">
        <label>Status</label>
        <br>
        <input type="checkbox" name="status" <?php if(isset($page->status) == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
    </div>

<hr>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
