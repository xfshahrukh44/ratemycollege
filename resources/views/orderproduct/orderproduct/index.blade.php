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
            <div class="card-header bg-info">Orderproduct</div>
            <div class="card-body">
                <!--<a href="{{ url('/admin/orderproduct/create') }}" class="btn btn-success btn-sm" title="Add New Orderproduct">-->
                <!--    <i class="fa fa-plus" aria-hidden="true"></i> Add New-->
                <!--</a>-->

                <form method="GET" action="{{ url('/admin/orderproduct') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                <th>Order Id</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Product Qty</th>
                                <th>Product Price</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderproduct as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>

                                    <td>{{ $item->order_id }}</td>
                                    
                                    <td>
                                        <img src="{{ ($item->image != null) ? asset($item->image) : asset('no_image.png') }}" style="height: 75px;width: 120px;border: 1px solid #000;border-radius: 10px;" />
                                    </td>
                                
                                    <td>{{ $item->order_product_name }}</td>
                                    
                                    <td>{{ $item->order_product_qty }}</td>
                                    
                                    <td>${{ App\Models\Product::find($item->order_product_id)->price }}</td>
                                    
                                    <td> <?php if($item->status == '1'){ ?> <span class="badge bg-primary"> <i class="fa fa-check"></i> Active </span> <?php }else{ ?> <span class="badge bg-danger"> <i class="fa fa-ban"></i> In-Active </span> <?php } ?> </td>
                                   
                                    <td>
                                        <!--<a href="{{ url('/admin/orderproduct/' . $item->id) }}" title="View Orderproduct"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View </button></a>-->
                                        <!--<a href="{{ url('/admin/orderproduct/' . $item->id . '/edit') }}" title="Edit Orderproduct"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit </button></a>-->

                                        <form method="POST" action="{{ url('/admin/orderproduct' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Orderproduct" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $orderproduct->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
                
                
                <!--Extra-->
                
                
                    <div class="row">
            
                        <div class="col-md-6">
                            
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    
                                    <?php 
                                        
                                        $ID = $_GET['id'];
                                        $order = DB::table('orders')->where('id',$ID)->first(); 
                                    
                                    ?>
                                    
                                    <tr>
                                        <th> Full Name </th>
                                        <td> {{ $order->first_name }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $order->order_email }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Country </th>
                                        <td> {{ $order->country }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> City </th>
                                        <td> {{ $order->city }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> State </th>
                                        <td> {{ $order->state }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Zipcode </th>
                                        <td> {{ $order->zipcode }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Phone No </th>
                                        <td> {{ $order->phoneno }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Address </th>
                                        <td> {{ $order->address }} </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            
                        </div>
                        
                        
                        <div class="col-md-6">
                            
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    
                                    <tr>
                                        <th> Total Amount </th>
                                        <td> ${{ $order->total }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Order Status </th>
                                        <td> {{ $order->order_status }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Transaction ID </th>
                                        <td> {{ $order->transaction_id }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Customer ID </th>
                                        <td> {{ $order->customer_id }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Card Payment </th>
                                        <td> {{ $order->card_payment }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Payment Method </th>
                                        <td> {{ $order->payment_method }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Tracking No </th>
                                        <td> {{ $order->tracking_no }} </td>
                                    </tr>
                                    
                                    <tr>
                                        <th> Reciept </th>
                                        <td> <a class="btn btn-danger btn-sm" href="{{ $order->receipt_url }}" target="_blank"> View Reciept </a> </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            
                        </div>
                        
                    </div>
                            
                
                <!-- End Extra -->

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
