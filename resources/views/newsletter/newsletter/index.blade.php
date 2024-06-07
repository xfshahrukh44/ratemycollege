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
            <div class="card-header bg-info">Newsletter</div>
            <div class="card-body">
                <a href="{{ url('/admin/newsletter/create') }}" class="btn btn-success btn-sm" title="Add New Newsletter">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>

                <form method="GET" action="{{ url('/admin/newsletter') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <th>#</th><th>Name</th><th>Email</th><th>Status</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsletter as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>{{ $item->name }}</td><td>{{ $item->email }}</td>
                                   
                                    <td> <?php if($item->status == '1'){ ?> <span class="badge bg-primary"> <i class="fa fa-check"></i> Active </span> <?php }else{ ?> <span class="badge bg-danger"> <i class="fa fa-ban"></i> In-Active </span> <?php } ?> </td>
                                   
                                    <td>
                                        <a href="{{ url('/admin/newsletter/' . $item->id) }}" title="View Newsletter"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </button></a>
                                        <a href="{{ url('/admin/newsletter/' . $item->id . '/edit') }}" title="Edit Newsletter"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit </button></a>

                                        <form method="POST" action="{{ url('/admin/newsletter' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Newsletter" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $newsletter->appends(['search' => Request::get('search')])->render() !!} </div>
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
