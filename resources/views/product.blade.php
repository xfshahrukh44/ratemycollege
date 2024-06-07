<?php use Illuminate\Support\Facades\Crypt; ?>
 
@extends('layouts.backend')

@section('css')
<style>


</style>
@endsection



@section('content')


<div class="container-fluid text-center">
    
    <hr>
        <h1> Product 
            <a href="{{route('cart')}}" class="btn btn-info" data-toggle="dropdown" style="float:right;">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </a> 
        </h1>
    <hr>
    
</div>

<form method="post" action="">
<div class="row container-fluid d-flex justify-content-center">
    
    @foreach($product as $key => $val_product)
        
        <?php $encrypted = Crypt::encryptString($val_product->id); ?>
            
        <div class="col-md-3" style="padding: 10px; background-color: #f9f9f9;"> 
           
            <img src="{{asset($val_product->image)}}"  style="height: 400px; width: 500px; border-radius: 20px; border: 1px solid #000;" class="img-fluid" />
            <br>
            <hr>
            <p> Name : {{ $val_product->title }} </p>
            <hr>
            <p> Price : <b> {{ $val_product->price }} </b> &nbsp;&nbsp; <del> &nbsp; {{ $val_product->oldprice }}&nbsp; </del> </p>
            <hr>
           
            <a href="{{URL('product_detail/'.$encrypted)}}" class="btn btn-danger"> details </a>
            
        </div>
                
    @endforeach
    
</div>
</form>


@endsection



@section('js')
<script type="text/javascript">

    
</script>
@endsection
