@extends('layouts.app')

@section('content')

 
<div class="wrapper">

  <!-- Preloader -->
    @include('layouts.admin_layout.preloader')
  <!-- Preloader -->


  <!-- Navbar -->
    @include('layouts.admin_layout.top_navbar')
  <!-- /.navbar -->


  <!-- Left Navbar -->
     @include('layouts.admin_layout.left_navbar') 
  <!-- Left Navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">

        <div class="col-md-12" style="margin-top:25px;">

            
                <br>
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <img style="height: 70px !important;" src="{{asset(App\Http\Traits\ConfigTraits::get_favicon())}}" alt="">
                    </div>
                </div>
            
                <div class="card">
                    
                    <div class="card-header bg-info">Generator</div>
                    
                    <br><br>
                    
                    <div class="card-body">

                        <form class="form-horizontal" method="post" action="{{ url('/admin/generator') }}">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="crud_name" class="col-md-4 col-form-label text-right">Crud Name:</label>
                                <div class="col-md-6">
                                    <input type="text" name="crud_name" class="form-control" id="crud_name" placeholder="Posts" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="controller_namespace" class="col-md-4 col-form-label text-right">Controller Namespace:</label>
                                <div class="col-md-6">
                                    <input type="text" name="controller_namespace" class="form-control" id="controller_namespace" placeholder="Admin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="route_group" class="col-md-4 col-form-label text-right">Route Group Prefix:</label>
                                <div class="col-md-6">
                                    <input type="text" name="route_group" class="form-control" id="route_group" placeholder="admin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="view_path" class="col-md-4 col-form-label text-right">View Path:</label>
                                <div class="col-md-6">
                                    <input type="text" name="view_path" class="form-control" id="view_path" placeholder="admin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="route" class="col-md-4 col-form-label text-right">Want to add route?</label>
                                <div class="col-md-6">
                                    <select name="route" class="form-control" id="route">
                                        <option value="yes">Yes</option>
                                        <!--<option value="no">No</option>-->
                                    </select>
                                </div>
                            </div>
                            <!--<div class="form-group row">-->
                            <!--    <label for="relationships" class="col-md-4 col-form-label text-right">Relationships</label>-->
                            <!--    <div class="col-md-6">-->
                            <!--        <input type="text" name="relationships" class="form-control" id="relationships" placeholder="comments#hasMany#App\Comment">-->
                            <!--        <p class="help-block">method#relationType#Model</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="form-group row">
                                <label for="form_helper" class="col-md-4 col-form-label text-right">Form Helper</label>
                                <div class="col-md-6">
                                    <!--<input type="text" name="form_helper" class="form-control" id="form_helper" placeholder="laravelcollective" value="laravelcollective">-->
                                    <input type="text" name="form_helper" class="form-control" id="form_helper" placeholder="html" value="html" readonly>
                                </div>
                            </div>
                            <!--<div class="form-group row">-->
                            <!--    <label for="soft_deletes" class="col-md-4 col-form-label text-right">Want to use soft deletes?</label>-->
                            <!--    <div class="col-md-6">-->
                            <!--        <select name="soft_deletes" class="form-control" id="soft_deletes">-->
                            <!--            <option value="no">No</option>-->
                            <!--            <option value="yes">Yes</option>-->
                            <!--        </select>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <hr>

                            <div class="form-group row">
                            <div class="col-md-12">
                            <div class="form-group table-fields">
                                
                                <h4 class="text-center">Table Fields:</h4><br>
                                
                                <div class="entry col-md-12 form-inline" style="justify-content:center; padding:5px;">
                                    <input class="form-control" name="fields[]" type="text" placeholder="field_name" required="true">
                                    &nbsp;&nbsp;
                                    <select name="fields_type[]" class="form-control">
                                        <option value="string">string</option>
                                        <option value="email">email</option>
                                        <option value="password">password</option>
                                        <option value="varchar">varchar</option>
                                        <option value="text">text</option>
                                        <option value="file">file</option>
                                        <option value="char">char</option>
                                        <option value="date">date</option>
                                        <option value="datetime">datetime</option>
                                        <option value="time">time</option>
                                        <option value="timestamp">timestamp</option>
                                        <option value="mediumtext">mediumtext</option>
                                        <option value="longtext">longtext</option>
                                        <option value="json">json</option>
                                        <option value="jsonb">jsonb</option>
                                        <option value="binary">binary</option>
                                        <option value="number">number</option>
                                        <option value="integer">integer</option>
                                        <option value="bigint">bigint</option>
                                        <option value="mediumint">mediumint</option>
                                        <option value="tinyint">tinyint</option>
                                        <option value="smallint">smallint</option>
                                        <option value="boolean">boolean</option>
                                        <option value="decimal">decimal</option>
                                        <option value="double">double</option>
                                        <option value="float">float</option>
                                    </select>
                                    &nbsp;&nbsp;
                                    <label> Required </label>
                                    &nbsp;&nbsp;
                                    <select name="fields_required[]" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    &nbsp;&nbsp;
                                    <button class="btn btn-success btn-add inline btn-sm" type="button">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                    
                                    
                                </div>
                                
                            </div>
                            </div>
                            </div>
                                
                            

                            <p class="help text-center">It will automatically assume form fields based on the migration field type.</p>
                            <br>
                            
                            <center>
                                <button type="submit" class="btn btn-primary" name="generate">Generate</button>
                            </center>
                              
                        </form>

                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.row (main row) -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Footer -->

  <!-- End Footer -->
  
</div>
<!-- ./wrapper -->


@endsection



@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                var tableFields = $('.table-fields'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(tableFields);

                newEntry.find('input').val('');
                tableFields.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="fa fa-minus"></span>');
            }).on('click', '.btn-remove', function(e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });

        });
    </script>
    
@endsection
