@extends('shop.layouts.shop') 

{{-- thay đổi nội dung phần content --}}
@section('content')
	<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-9">
						
						<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
							<span>C</span>heckout
						</h3>
			<!-- //tittle heading -->
						<div class="checkout-right">
						
							<table class="table table-responsive">
					                <thead>
					                    <tr>
					                        <th>Product</th>
					                        <th>Quantity</th>
					                        <th class="text-center">Price</th>
					                        <th class="text-center">Total</th>
					                        <th> </th>
					                    </tr>
					                </thead>
					                <tbody style="padding:2px">
					                    @if(Cart::content() != null)
											@foreach (Cart::content() as $cart)
						                    <tr>
						                        <td class="col-md-7" style="padding: 0px">
							                        <div class="media">
							                            <a class="thumbnail pull-left" style="padding-right: 5px" href="#"><img class="media-object" src="{{asset($cart->options->thumbnail)}}" style="width: 72px; height: 72px;"> </a>
							                            <div class="media-body" style="padding-left: 11px;">
							                                <h4 class="media-heading"><a href="#">{{$cart->name}}</a></h4>
							                                <h5 class="media-heading"><a href="#">size :{{$cart->options->size}}&nbsp; color :{{$cart->options->color}}</a></h5>							                                
							                            </div>
							                        </div></td>
							                        <td class="col-md-1 row" style="position: relative;padding-right: 70px;">
								                        <span class="col-md-3"><button style="position: absolute;left: -30px" class="btn btn-dark add-or-minus " data-rowId="{{$cart->rowId}}" status="-1">-</button></span>
								                        <input style="width: 83px;text-align: center;" type="number" class="form-control col-md-6 " id="cart-qty-{{$cart->rowId}}" value="{{$cart->qty}}">
								                        <span class="col-md-3"><button style="position: absolute;left: 70px;top: -34px" class="btn btn-dark add-or-minus" data-rowId="{{$cart->rowId}}" status="1">+</button></span>
							                        </td>
							                        <td style="padding-left: 19px" class="col-md-1 "><strong>{{$cart->price}}Đ</strong></td>
							                        <td class="col-md-2 text-center"  id="total-{{$cart->rowId}}"><strong>{{$cart->price*$cart->qty}}Đ</strong></td>
							                        <td class="col-md-1" >
							                        <button  type="button" class="btn btn-danger  cart-del" data-id="{{$cart->rowId}}">
							                            <span class="glyphicon glyphicon-remove"></span> Remove
							                        </button>
						                        	</td>

						                    </tr>
						                    
						                    @endforeach
										@endif 
											

											
						                    <tr>
						                        <td>   </td>
						                        <td>   </td>
						                        <td>   </td>
						                        <td><h3>Total</h3></td>
						                        <td class="text-right" id="cart-total"><p><strong>{{Cart::total()}}Đ</strong></p></td>
						                    </tr>
						                   
					                    <tr>
					                        <td>   </td>
					                        <td>   </td>
					                        <td>   </td>
					                        <td style="position: absolute;right: 20px;">
					                        <a type="button" class="btn btn-success" href="{{asset('')}}">
					                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
					                        </a></td>
					                        
					                    </tr>
					                </tbody>
			            	</table>
						</div>

						
					</div>

					<!-- Order Details -->
					<div class="col-md-3 order-details">
						<div class="address_form_agile mt-sm-5 mt-4">
								<br>
								<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
								<br>
								<form action="/order" method="post" class="creditly-card-form agileinfo_form">
									@csrf
									<div class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row">
												
												<div class="w3_agileits_card_number_grids">
													<div class="controls form-group">
													<input class="billing-address-name form-control" id="fullname" type="text" name="fullname" placeholder="Full Name" >
													{{-- <span class="name-error"></span> --}}
													@if($errors->has('fullname'))
														<span style="color: red;font-weight: bold">{{$errors->first('fullname')}}</span>
													@endif
												</div>
													<div class="w3_agileits_card_number_grid_left form-group">
														<div class="controls">
															<input type="text" class="form-control" placeholder="Mobile Number" id="mobilenum" name="mobilenum" >
															{{-- <span class="mobile-error"></span> --}}
															@if($errors->has('mobilenum'))
																<span style="color: red;font-weight: bold">{{$errors->first('mobilenum')}}</span>
															@endif
														</div>
													</div>
													<div class="controls form-group">
													<input type="text" class="form-control" placeholder="Town/City" id="addre" name="addre" >
													<span class="addre-error"></span>
													@if($errors->has('addre'))
															<span style="color: red;font-weight: bold">{{$errors->first('addre')}}</span>
													@endif
												</div>
												</div>
												
												
											</div>
											<div style="text-align: center;">
											<button type="submit" href="/order" style="font-weight: bold;" class="submit check_out btn btn-danger">Delivery to this Address</button></div>
										</div>
									</div>
								</form>
								<div class="checkout-right-basket">
									<a href="payment.html">Make a Payment
										<span class="far fa-hand-point-right"></span>
									</a>
								</div>
							</div>
						
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
@endsection
@section ('footer')
	{{-- <script>
		$(document).on("click",'#add2cart', function(e) {
			e.preventDefault();
			$.ajax({
	        url: '/order',
	        type: 'get',

	        data: {
		          id: $('#name').val(), 
		           name: $('#mobile').val(),
		          	price :$('#address').val(),
		          	quantity : $('#quantity').val(),
		          _token: $('meta[name="csrf-token"]').attr('content')   
		        },
		        success: function (response) {
		        	console.log(response);
		        },
		        error: function (error) {
			                
			    }
		    });
		})
	</script> --}}
	<script type="text/javascript">
		$(document).on('click','.add-or-minus',function (e) {
			e.preventDefault();
			var rowId = $(this).attr('data-rowId');
			var status = $(this).attr('status');
			var qty = $('#cart-qty-'+rowId+'').val();
			$.ajax({
	        url: '/addorminus',
	        type: 'get',
	        data: {
		          rowId: rowId,
		          status: status,
		          qty: qty
		        },
		        success: function (response) {
		        	// console.log(response);
		        	if (response.is_remove== 1)  {
		        			$('#cart-qty-'+rowId+'').parent().parent().remove();
		        			$('#sub').html('0Đ');
		        	}
		        	else {
		        		$('#cart-qty-' + rowId).val(response.qty);
		        		$('#total-'+rowId+'').html('<strong>'+ response.price * response.qty +' Đ</strong>');
		        		$('#sub').html('<strong>'+ response.price * response.qty +'Đ</strong>');
		        		$('#cart-total').html('<strong>'+response.carttotal+'Đ</strong>');
		        	}
		        },
		        error: function (error) {
		           	

			                
			    }
		    });
		})
	</script>
@endsection