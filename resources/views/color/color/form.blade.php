<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<div class="col-md-4">
        
        <div class="form-group{{ $errors->has('color') ? 'has-error' : ''}}">
            <label for="color" class="control-label">{{ 'Color' }}</label>
            <input class="form-control" name="color" type="color" id="color" value="<?php if(isset($color->color) != ''){echo $color->color; }else{ echo ''; } ?>">
            {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
        </div>
    
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($color->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


