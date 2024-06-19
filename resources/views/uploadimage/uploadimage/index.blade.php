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

        <?php 
            
            $ID = '';
            
            if(isset($_GET['id']))
            {
                $ID = $_GET['id'];
            }
        
        ?>

        <!-- Main row -->
        <div class="row">

            <div class="col-md-12" style="margin-top:25px;">

            <div class="card">
            <div class="card-header bg-info">Upload Multiple Images</div>
            <div class="card-body">
                
                <?php if($ID != ''){ ?>
                
                    <a href="{{ url('/admin/uploadimage/create?id='.$ID) }}" class="btn btn-success btn-sm" title="Add New Uploadimage">
                        <i class="fa fa-plus" aria-hidden="true"></i> Upload Images
                    </a>
                
                <?php }else{ ?>
                
                    <a href="{{ url('/admin/product') }}" class="btn btn-success btn-sm" title="Add New Uploadimage">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                    </a>
                
                <?php } ?>


                <form method="GET" action="{{ url('/admin/uploadimage') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <br/>
                <br/>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($uploadimage as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ App\Models\Product::find($item->product)->title }}</td>
                                <td>
                                    <img src="{{ ($item->image != null) ? asset($item->image) : asset('no_image.png') }}" style="height: 75px;width: 120px;border: 1px solid #000;border-radius: 10px;" />
                                </td>
                               
                                <td> <?php if($item->status == '1'){ ?> <span class="badge bg-primary"> <i class="fa fa-check"></i> Active </span> <?php }else{ ?> <span class="badge bg-danger"> <i class="fa fa-ban"></i> In-Active </span> <?php } ?> </td>
                               
                                <td>
                                    <!--<a href="{{ url('/admin/uploadimage/' . $item->id) }}" title="View Uploadimage"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </button></a>-->
                                    <!--<a href="{{ url('/admin/uploadimage/' . $item->id . '/edit') }}" title="Edit Uploadimage"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit </button></a>-->

                                    <form method="POST" action="{{ url('/admin/uploadimage' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Uploadimage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $uploadimage->appends(['search' => Request::get('search')])->render() !!} </div>
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
