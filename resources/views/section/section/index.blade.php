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
            <div class="card-header bg-info">Section</div>
            <div class="card-body">
                <a href="{{ url('/admin/section/create') }}" class="btn btn-success btn-sm" title="Add New Section">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>

                <form method="GET" action="{{ url('/admin/section') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <th>label</th>
                                <th>Slug</th>
                                <th>Type</th>
                                <th>Page</th>
                                <th style="width:80px;">Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($section as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->label }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->type }}</td> 
                                    <td>{{ App\Models\Page::find($item->page_id)->title }}</td>
                                    
                                    <td> 
                                        <?php if($item->status == '1'){ ?> <span class="badge bg-primary"> <i class="fa fa-check"></i> Active </span> <?php }else{ ?> <span class="badge bg-danger"> <i class="fa fa-ban"></i> In-Active </span> <?php } ?> 
                                    </td>
                                    
                                    <td>
                                        <a href="{{ url('/admin/section/' . $item->id) }}" title="View Section"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </button></a>
                                        <!--<a href="{{ url('/admin/section/' . $item->id . '/edit') }}" title="Edit Section"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit </button></a>-->

                                        <form method="POST" action="{{ url('/admin/section' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Section" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $section->appends(['search' => Request::get('search')])->render() !!} </div>
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
