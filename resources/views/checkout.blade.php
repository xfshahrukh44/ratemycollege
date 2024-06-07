@extends('layouts.backend') 

@section('css')
<style>

.table-bordered>:not(caption)>*>* {
    border-width: 5px;
}


.payment-accordion .btn-link {
    display: block;
    width: 100%;
    text-align: left;
    padding: 10px 19px;
    color: black;
  }

  .payment-accordion .card-header {
      padding: 0px !important;
  }
  .payment-accordion .card-header:first-child{
    border-radius: 0px;
  }
  
  .payment-accordion .card{
    border-radius: 0px;
  }
  
  .form-group.hide {
    display: none;
  }
  

.panel-title {
    display: inline;
    font-weight: bold;
}
.display-table {
    display: table;
}
.display-tr {
    display: table-row;
}
.display-td {
    display: table-cell;
    vertical-align: middle;
    width: 61%;
}


.StripeElement {
box-sizing: border-box;
height: 40px;
padding: 10px 12px;
border: 1px solid transparent;
border-radius: 4px;
background-color: white;
box-shadow: 0 1px 3px 0 #e6ebf1;
-webkit-transition: box-shadow 150ms ease;
transition: box-shadow 150ms ease;
border-width: 1px;
border-color: rgb(150, 163, 218);
border-style: solid;
margin-bottom: 10px;
}

.StripeElement--focus {
box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
border-color: #fa755a;
}

.StripeElement--webkit-autofill {
background-color: #fefde5 !important;
}


button#stripe-submit {
background: #e40000 !important;
color: #ffff !important; 
width:100%;
}

.accordion-body {
    background: #fafafa !important;
}

</style>
@endsection



@section('content')


<div class="row"> 
    
    <div class="col-md-6"> 
    
       <div class="container" style="background-color: #fafafa; padding: 20px;">
            
            <hr>
                <h1 class="text-center"> Person Details </h1>
            <hr>
      
            <div style="padding:25px;">    
                
                <form action="{{route('order.place')}}" method="POST" id="order-place">
                   
                    @csrf
                   
                    <input type="hidden" name="payment_method" id="payment_method"  />
                    
                    <div class="form-group">
                    
                        <label>Full Name</label>
                        <input type="text" name="first_name" class="form-control" value="{{Auth::user()->name}}" readonly />
                    
                    </div>
                    <br>
                    <div class="form-group">
                    
                        <label>Email</label>
                        <input type="email" name="order_email" class="form-control" value="{{Auth::user()->email}}" readonly />
                        <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}" />
                    </div>
                    <br>
                    <div class="form-group">
                    
                        <label>Phone No</label>
                        <input type="text" name="phoneno" class="form-control" value="{{Auth::user()->phoneno}}"  />
                    
                    </div>
                     <br>
                    <div class="form-group">
                    
                        <label>Country</label>
                        <input type="text" name="country" class="form-control" value="{{Auth::user()->country}}"  />
                    
                    </div>
                     <br>
                    <div class="form-group">
                    
                        <label>City</label>
                        <input type="text" name="city" class="form-control" value="{{Auth::user()->city}}"  />
                    
                    </div>
                     <br>
                    <div class="form-group">
                    
                        <label>State</label>
                        <input type="text" name="state" class="form-control" value="{{Auth::user()->state}}"  />
                    
                    </div>
                     <br>
                    <div class="form-group">
                    
                        <label>Zipcode </label>
                        <input type="text" name="zipcode" class="form-control" value="{{Auth::user()->zipcode}}"  />
                    
                    </div>
                    <br>
                    <div class="form-group">
                    
                        <label>Address</label>
                        <textarea style="height:100px;" class="form-control" name="address">  {{Auth::user()->address}} </textarea>
                    
                    </div>
                    <br>
                    <div class="form-group">
                    
                        <label>Order Notes</label>
                        <textarea style="height:100px;" class="form-control" name="order_notes"> </textarea>
                    
                    </div>
                    
                    <?php 
                    
                        $price = 0; 
                    
                        foreach(session('cart') as $val_price){
                           
                           $price += $val_price['price'];
                            
                        }
                    
                    ?>
                    
                    <input type="hidden" name="total" value="{{$price}}" />
                    <input type="hidden" name="order_status"  />
                    <input type="hidden" name="card_payment"  />
                    <input type="hidden" name="customer_id"  />
                    <input type="hidden" name="payment_method"  />
                    
                    <input type="hidden" name="cvv" />
                    <input type="hidden" name="card_no" />
                    <input type="hidden" name="exp_month" />
                    <input type="hidden" name="exp_year" />
                    
                </form>
            </div>
        </div>
    
    </div>
    
    <div class="col-md-6">  
    
        <div class="container text-center">
            <hr>
                <h1> View All Cart Details </h1>
            <hr>
        
            <table id="cart" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th style="width:50%">Image</th>
                        <th style="width:50%">title</th>
                        <th style="width:200px;">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                            <tr data-id="{{ $id }}">
                                <td data-th="Product">
                                    <img src="{{ asset($details['image']) }}" width="100" height="100" class="img-responsive"/>
                                </td>
                                <td data-th="Price">{{ $details['name'] }}</td>
                                <td data-th="Price">${{ $details['price'] }}</td>                                <td data-th="Quantity">
                                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" readonly/>
                                </td>
                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                    </tr>
                   
                </tfoot>
        </table>
        
        </div>
        
        
        
        <div class="accordion" id="accordionExample">
        <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Stripe Payment 
        </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                
                <div class="stripe-form-wrapper require-validation" data-stripe-publishable-key="{{env('STRIPE_KEY')}}" data-cc-on-file="false">
                    <div id="card-element"></div>
                    <div id="card-errors" role="alert"></div>
                    <div class="form-group">
                      <button class="btn btn-red btn-block" type="button" id="stripe-submit"> <b><i>  Pay Now By Credit Card ${{ $total }}  </i></b></button>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Paypal Payment
        </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                
                <div class="card-header" id="headingOne">
                   <h5 class="mb-0">
                        <div id="paypal-button-container-popup"></div>
                   </h5>
                 </div>
                
            </div>
        </div>
        </div>
        <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Authorize Payment
        </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
          
                <div class="row">

                    <div class="col-md-9"> 
                        <label> Owner Name </label>
                        <input type="text" class="form-control" id="owner_name" required/>
                    </div>

                    <div class="col-md-3"> 
                        <label> CVV </label>
                        <input type="number" class="form-control" id="cvv"  required/>
                    </div>

                </div>
                  
                <br>

                <div class="row">

                    <div class="col-md-9"> 
                        <label> Card Name </label>
                        <input type="text" placeholder="Card Name" id="card_no"  class="form-control" required/>
                    </div>

                    <div class="col-md-3"> 
                        <label> Amount </label>
                        <input type="number" value="{{$total}}" class="form-control" />
                    </div>

                </div>
                  
                <br>

                <div class="row">

                    <div class="col-md-9"> 
                        <label> Expiry Month </label>
                        <input type="text" placeholder="Expiry Month"  id="exp_month" class="form-control" required/>
                    </div>

                    <div class="col-md-3"> 
                        <label> Expiry Year </label>
                        <input type="number" placeholder="Expiry Year"  id="exp_year" class="form-control" required/>
                    </div>

                </div>

                <br>

                <Button type="button" id="authorize_btn" class="btn btn-danger" style="background: #e40000;width:100%; color:#ffff;" > <b> <i> Pay by Athorize.Net {{$total}}  </i> </b> </Button>

            </div>
        </div>
        </div>
        </div>
    
    
    </div>
    
</div>


@endsection



@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>



<!--<script src="https://www.paypal.com/sdk/js?client-id=AV06KMdIerC8pd6_i1gQQlyVoIwV8e_1UZaJKj9-aELaeNXIGMbdR32kDDEWS4gRsAis6SRpUVYC9Jmf&enable-funding=venmo&disable-funding=credit,card"></script>-->
<!--<script src="https://www.paypalobjects.com/api/checkout.js"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>

      paypal.Button.render({
      env: 'sandbox', //production

      style: {
        label: 'checkout',
        size:  'responsive',
        shape: 'rect',
        color: 'gold'
      },
      client: { 
        sandbox: 'AV06KMdIerC8pd6_i1gQQlyVoIwV8e_1UZaJKj9-aELaeNXIGMbdR32kDDEWS4gRsAis6SRpUVYC9Jmf',
        // production:'ARIYLCFJIoObVCUxQjohmqLeFQcHKmQ7haI-4kNxHaSwEEALdWABiLwYbJAwAoHSvdHwKJnnOL3Jlzje',
      },
      validate: function(actions) {
        actions.disable();
        paypalActions = actions;
      },

      onClick:  function(e) {
        var errorCount = checkEmptyFileds();

        if(errorCount == 1){
          $.toast({
              heading: 'Alert!',
              position: 'bottom-right',
              text:  'Please fill the required fields before proceeding to pay',
              loaderBg: '#ff6849',
              icon: 'error',
              hideAfter: 5000,
              stack: 6
          });
          paypalActions.disable();
        }else{
          paypalActions.enable();
        }
      },
      payment: function(data, actions) {
        return actions.payment.create({
          payment: {
            transactions: [
              {
                
                 amount: { total: {{number_format(((float)$total),2, '.', '')}}, currency: 'USD' }
                
              }
            ]
          }
        });
      },
      onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function() {
          // generateNotification('success','Payment Authorized');

           $.toast({
                heading: 'Success!',
                position: 'bottom-right',
                text:  'Payment Authorized',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 1000,
                stack: 6
            });

          var params = {
            payment_status:'Completed',
            paymentID: data.paymentID,
            payerID: data.payerID
          };

          // console.log(data.paymentID);
          // return false;
          $('input[name="order_status"]').val('succeeded');
          $('input[name="card_payment"]').val(data.paymentID);
          $('input[name="customer_id"]').val(data.payerID);
          $('input[name="payment_method"]').val('paypal');
          $('#order-place').submit();
        });
      },
      onCancel: function(data, actions) {
          var params = {
            payment_status:'Failed',
            paymentID: data.paymentID
          };
          $('input[name="order_status"]').val('Failed');
          $('input[name="card_payment"]').val(data.paymentID);
          $('input[name="customer_id"]').val('');
          $('input[name="payment_method"]').val('paypal');
      }
    }, '#paypal-button-container-popup');

</script>







<script src="https://js.stripe.com/v3/"></script>
<script>

  var stripe = Stripe('{{ env("STRIPE_KEY") }}');

  // Create an instance of Elements.
  var elements = stripe.elements();
  var style = {
    base: {
      color: '#32325d',
      lineHeight: '18px',
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: 'antialiased',
      fontSize: '16px',
      '::placeholder': {
        color: '#aab7c4'
      }
    },
    invalid: {
      color: '#fa755a',
      iconColor: '#fa755a'
    }
  };
  var card = elements.create('card', {style: style});
  card.mount('#card-element');

  card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
      $(displayError).show();
      displayError.textContent = event.error.message;
    } else {
      $(displayError).hide();
      displayError.textContent = '';
    }
  });

  var form = document.getElementById('order-place');
  var get_price = parseFloat($('#price').val());

  $('#stripe-submit').click(function(){
    stripe.createToken(card).then(function(result) {
      var errorCount = checkEmptyFileds();
      if ((result.error) || (errorCount == 1)) {
        // Inform the user if there was an error.
        if(result.error){
          var errorElement = document.getElementById('card-errors');
          $(errorElement).show();
          errorElement.textContent = result.error.message;
        }else{
          $.toast({
            heading: 'Alert!',
            position: 'bottom-right',
            text:  'Please fill the required fields before proceeding to pay',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 5000,
            stack: 6
          });
        }
      } else {
        // Send the token to your server.
        stripeTokenHandler(result.token);
      }
    });
  });


  function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    $('input[name="payment_method"]').val('stripe');
    var form = document.getElementById('order-place');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
    form.submit();
  }


  function checkEmptyFileds(){
    var errorCount = 0;
    $('form#order-place').find('.form-control').each(function(){
      if($(this).prop('required')){
        if( !$(this).val() ) {
          $(this).parent().find('.invalid-feedback').addClass('d-block');
          $(this).parent().find('.invalid-feedback strong').html('Field is Required');
          errorCount = 1;
        }
      }
    });
    return errorCount;
  }

</script>


<script>

  $('#authorize_btn').click(function(){

      //  alert("adfasf");
      var owner_name = $('#owner_name').val();
      var cvv = $('#cvv').val();
      var card_no = $('#card_no').val();
      var amount = $('#amount').val();
      var exp_month = $('#exp_month').val();
      var exp_year = $('#exp_year').val();


      //  alert(owner_name);
      //  alert(cvv);
      //  alert(card_no);
      //  alert(amount);
      //  alert(exp_month);
      //  alert(exp_year);

      handle_authorize(); 

  });

  function handle_authorize(){

    var form = document.getElementById();

    $('input[name="payment_method"]').val("authorize");
    $('input[name="cvv"]').val(cvv);
    $('input[name="card_no"]').val(card_no);
    $('input[name="exp_month"]').val(exp_month);
    $('input[name="exp_year"]').val(exp_year);

    form.submit();

  }

</script>


@endsection
