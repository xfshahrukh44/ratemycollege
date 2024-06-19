<div class="form-group{{ $errors->has('formname') ? 'has-error' : ''}}">
    <label for="formname" class="control-label">{{ 'Formname' }}</label>
    <input class="form-control" name="formname" type="text" id="formname" value="<?php if(isset($inquiry->formname)){ echo $inquiry->formname; }else{ echo ''; } ?>" >
    {!! $errors->first('formname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('fname') ? 'has-error' : ''}}">
    <label for="fname" class="control-label">{{ 'Fname' }}</label>
    <input class="form-control" name="fname" type="text" id="fname" value="<?php if(isset($inquiry->fname)){ echo $inquiry->fname; }else{ echo ''; } ?>" >
    {!! $errors->first('fname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('lname') ? 'has-error' : ''}}">
    <label for="lname" class="control-label">{{ 'Lname' }}</label>
    <input class="form-control" name="lname" type="text" id="lname" value="<?php if(isset($inquiry->lname)){ echo $inquiry->lname; }else{ echo ''; } ?>" >
    {!! $errors->first('lname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="<?php if(isset($inquiry->email)){ echo $inquiry->email; }else{ echo ''; } ?>" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('isread') ? 'has-error' : ''}}">
    <label for="isread" class="control-label">{{ 'Isread' }}</label>
    <input class="form-control" name="isread" type="text" id="isread" value="<?php if(isset($inquiry->isread)){ echo $inquiry->isread; }else{ echo ''; } ?>" >
    {!! $errors->first('isread', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('message') ? 'has-error' : ''}}">
    <label for="message" class="control-label">{{ 'Message' }}</label>
    <input class="form-control" name="message" type="text" id="message" value="<?php if(isset($inquiry->message)){ echo $inquiry->message; }else{ echo ''; } ?>" >
    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
</div>


<?php if($formMode === 'edit') { ?>
    
    
    <hr>
    
        <div class="form-group">
            <label>Status</label>
            <br>
            <input type="checkbox" name="status" <?php if($inquiry->status == '1'){ echo 'checked'; }else{ echo ''; } ?>  data-bootstrap-switch data-off-color="danger" data-on-color="success">
        </div>
    
    <hr>
    
    
<?php } ?>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


