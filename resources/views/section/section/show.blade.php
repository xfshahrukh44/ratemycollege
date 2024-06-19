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

        <br>
        
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img style="height: 70px !important;" src="{{asset(App\Http\Traits\ConfigTraits::get_favicon())}}" alt="">
            </div>
        </div>
        

        <!-- Main row -->
        <div class="row">

         

            <div class="col-md-12" style="margin-top:25px;">
                <div class="card">
                    <div class="card-header bg-info">Section {{ $section->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/section') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <!--<a href="{{ url('/admin/section/' . $section->id . '/edit') }}" title="Edit Section"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>-->

                        <form method="POST" action="{{ url('admin/section' . '/' . $section->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Section" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $section->id }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Label </th>
                                        <td> {{ $section->label }} </td>
                                    </tr>
                                        
                                    <tr>
                                        <th> Slug </th>
                                        <td> {{ $section->slug }} </td>
                                    </tr>
                                        
                                    <tr>
                                        <th> Type </th>
                                        <td> {{ $section->type }} </td>
                                    </tr>
                                    
                                    <?php if($section->type == 'text'){?>
                                    
                                    <tr>
                                        <th> Text </th>
                                        <td> {{ $section->value }} </td>
                                    </tr>
                                    
                                    <?php }else if($section->type == 'textarea'){ ?>
                                    
                                    <tr>
                                        <th> Description </th>
                                        <td> <textarea readonly>  {!! $section->value !!} </textarea> </td>
                                    </tr>
                                    
                                    <?php }else if($section->type == 'image'){ ?>
                                    
                                    <tr>
                                        <th> Image </th>
                                        <td> <img src="{{ asset($section->value) }}" /></image> </td>
                                    </tr>
                                    
                                    <?php } ?>

        
                                </tbody>
                            </table>
                        </div>

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
