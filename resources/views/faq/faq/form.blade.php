<div class="form-group{{ $errors->has('question') ? 'has-error' : ''}}">
    <label for="question" class="control-label">{{ 'Question' }}</label>
    <input class="form-control" name="question" type="text" id="question" value="<?php if(isset($faq->question)){ echo $faq->question; }else{ echo ''; } ?>" >
    {!! $errors->first('question', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('answer') ? 'has-error' : ''}}">
    <label for="answer" class="control-label">{{ 'Answer' }}</label>
    <input class="form-control" name="answer" type="text" id="answer" value="<?php if(isset($faq->answer)){ echo $faq->answer; }else{ echo ''; } ?>" >
    {!! $errors->first('answer', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($faq->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


