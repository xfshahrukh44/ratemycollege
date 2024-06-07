@extends('layouts.backend')

@section('css')
<style>


</style>
@endsection



@section('content')


<div class="container-fluid text-center">
    <hr>
        <h1> Product Details 
            
            <a href="{{route('cart')}}" class="btn btn-info" data-toggle="dropdown">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </a> 
        
        </h1>
    <hr>
</div>

<form method="post" action="">
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-md-10" style="padding: 10px;border-radius: 20px;"> 
               
            <img src="{{asset($product_detail->image)}}"  style="border:1px solid #000;height: 400px;border-radius:15px; width: 500px;" class="img-fluid" />
            <br>
            <br>
            <hr>
            <p> Name : {{ $product_detail->title }} </p>
            <hr>
            <p> Price : <b> {{ $product_detail->price }} </b> </p>
            <hr>
            <p> Old Price : <del> &nbsp; {{ $product_detail->oldprice }} &nbsp; </del> </p>
            <hr>
            <p> Description : {!! $product_detail->longdescription !!} </p>
            <hr>
            <a href="{{ route('add_to_cart', $product_detail->id) }}" class="btn btn-danger"> Add to Cart </a>
            
        </div>
    </div>
</form>


@endsection



@section('js')
<script type="text/javascript">

    
</script>
@endsection
