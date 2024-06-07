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
            <div class="card-header bg-info">Order</div>
            <div class="card-body">
                <!--<a href="{{ url('/admin/order/create') }}" class="btn btn-success btn-sm" title="Add New Order">-->
                <!--    <i class="fa fa-plus" aria-hidden="true"></i> Add New-->
                <!--</a>-->

                <form method="GET" action="{{ url('/admin/order') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Amount</th>
                                <th>Merchant</th>
                                <th>Status</th>
                                <th>Action</th>
                                <!--<th>Actions</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td> 
                                    <td>{{ $item->first_name }}</td>
                                    <td>{{ $item->order_email }}</td>
                                    <td>{{ $item->total }}</td>
                                    <td>{{ $item->payment_method }}</td>
                                    
                                    <td> <?php if($item->status == '1'){ ?> <span class="badge bg-primary"> <i class="fa fa-check"></i> Active </span> <?php }else{ ?> <span class="badge bg-danger"> <i class="fa fa-ban"></i> In-Active </span> <?php } ?> </td>
                                   
                                    <td> 
                                        <?php if($item->payment_method == 'stripe'){ ?>
                                            <a class="btn btn-info btn-sm" href="{{ url('/admin/orderproduct' . '?id=' . $item->id) }}"> <span> <i class="fa fa-eye"> </i> </span> &nbsp; view detail </a>
                                            <a class="btn btn-danger btn-sm" href="{{ $item->receipt_url }}" target="_blank"> <span> <i class="fa fa-file"> </i> </span> &nbsp; view slip </a>
                                        <?php }else{ ?>
                                            <a class="btn btn-info btn-sm" href="{{ url('/admin/orderproduct' . '?id=' . $item->id) }}"> <span> <i class="fa fa-eye"> </i> </span> &nbsp; view detail </a>
                                        <?php }?>
                                    </td>
                                   
                                   
                                    <!--<td>-->
                                    <!--    <a href="{{ url('/admin/order/' . $item->id) }}" title="View Order"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </button></a>-->
                                    <!--    <a href="{{ url('/admin/order/' . $item->id . '/edit') }}" title="Edit Order"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit </button></a>-->

                                    <!--    <form method="POST" action="{{ url('/admin/order' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">-->
                                    <!--        {{ method_field('DELETE') }}-->
                                    <!--        {{ csrf_field() }}-->
                                    <!--        <button type="submit" class="btn btn-danger btn-sm" title="Delete Order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>-->
                                    <!--    </form>-->
                                        
                                    <!--</td>-->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $order->appends(['search' => Request::get('search')])->render() !!} </div>
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
