@extends('shop.layouts.shop') 

{{-- thay đổi nội dung phần content --}}
@section('content')

		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						
						<div id="product-main-img">
							@foreach ($product_image as $image)
							<div class="product-preview">
								<img src="/{{$image->thumbnail}}" alt="">
							</div>
							@endforeach

						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							@foreach ($product_image as $image)
							<div class="product-preview">
								<img src="/{{$image->thumbnail}}" alt="">
							</div>
							@endforeach
							
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							{{-- <input type="text" > --}}
							<div hidden id="idprod">{{$prod->id}}</div>
							<h2 class="product-name">{{$prod->name}}</h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">{{$prod->price}}<del class="product-old-price">{{$prod->sale_price}}</del></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p>{{$prod->description}}</p>

							<div class="product-options">
								
								<label>
									
									Size
									
									<select class="input-select" id="size-sel" style="width: 113px">
									<option >chon de</option>
										@foreach ($size as $siz)
											
											<option id="selsize"  value="{{$siz->id}}">{{$siz->name}}</option>
											
										@endforeach
										
									</select>
								
								</label>
								<label >
									Color
									<select class="input-select" id="colorsel" style="width: 118px">
										
									</select>
								</label>
								<br>
								<br>
								<div>
								Quantity<p id="quan" style="color: black"></p></div>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										
										<input type="number" id="quantity"  value="1" disabled="true">
										
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn" id="add2cart" data-id="{{$prod->id}}"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Quần đùi</a></li>
								<li><a href="#">Đồ lót</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>4.5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 80%;"></div>
														</div>
														<span class="sum">3</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 60%;"></div>
														</div>
														<span class="sum">2</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
@endsection
@section('footer')
{{-- <script scr="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script> --}}
<script>
		 $(document).on("click",'#add2cart', function(e) {
	      e.preventDefault();
	 		var id = $(this).attr('data-id');
	 	 // console.log($('#size-sel').val());

	 	 	if($('#size-sel :selected').text() !== 'chon de'){
 
		      	$.ajax({
			        url: '/add2cart/'+id,
			        type: 'get',

				        data: {
				          id: $('#product-id').val(), 
				           name: $('#product-name').val(),
				           // quantity: $('#password').val(),
				          	price :$('#product-price').val(),
				          	size : $('#size-sel :selected').text(),
				          	color : $('#colorsel :selected').text(),
				          	quantity : $('#quantity').val(),
				          	 
				          	// size :$('#password').val(),
				          	// sale_price :$('#password').val(),
				          _token: $('meta[name="csrf-token"]').attr('content')   
				        },
				        success: function(response){
				       	 console.log(response);
				                  //ẩn modal add đi
				                  
				                  // $('#countsp').html(response.countsp);
				                  $('.cart-list').append('<div class="product-widget" id="quick-view-cart"><div class="product-img"><img src="/'+response.cart.options.thumbnail+'" alt=""></div><div class="product-body"><h3 class="product-name" id="product-name" name="name"><a href="#">'+response.product.name+'</a></h3><h4 class="product-price" id="product-price" name="price"><span class="qty">'+response.product.price+'x'+response.cart.qty+'</span></h4><h4 class="product-sico" id="product-sico" name="sico"><span class="sico">'+response.cart.options.size+'&nbsp'+response.cart.options.color+'</span></h4></div><button class="delete cart-del"  data-id="'+response.cart.rowId+'"><i class="fa fa-close"></i></button></div>')	                   // console.log('success');
				                  // $('#modal-add-user').modal('hide');
				                  // $('#users-table').DataTable().ajax.reload();
				                  
				                  location.reload();
				                   
				                   toastr.success('Add new product success!')
				                },
				                error: function (jqXHR, textStatus, errorThrown) {
				                 
				                }

		        });

			}else {
				alert('chua chon size');
			}
	    });
	    
	   $('#size-sel').change(function(e){
	   		// alert($('#size-sel :selected').val());
	   		var id = $('#size-sel :selected').val();
	   		var idproduct = $('#idprod').text();
	   		 $.ajax({
		              //phương thức delete
		              type: 'post',
		              url: "/getid" ,
		              data:{
		              	selsize : id,
		              	idprod :  idproduct,
		              	_token: $('meta[name="csrf-token"]').attr('content')   
		              },
		              success: function (response) {
		                //thông báo xoá thành công bằng toastr
		                
		                $('#colorsel').empty();		                
		                $('#colorsel').append('<option>chon mau de</option>')
		                console.log(response.color[0][0].name);
		                for (var i = 0;i <response.color.length; i++){
		                	$('#colorsel').append('<option value="'+response.color[i][0].id+'">'+response.color[i][0].name+'</option>');
		                }
		                
		              },
		              error: function (error) {
		                
		              }
	   		});
	   })

	   $('#colorsel').change(function(e){
	   		var id = $('#size-sel :selected').val();
	   		var idproduct = $('#idprod').text();
	   		var idcolor = $('#colorsel :selected').val();
	   		$('#quantity').attr('disabled', false);
	   		$.ajax({
		              //phương thức delete
		              type: 'post',
		              url: "/getcolor" ,
		              data:{
		              	selsize : id,
		              	idprod :  idproduct,
		              	idcolor : idcolor,
		              	_token: $('meta[name="csrf-token"]').attr('content')   
		              },
		              success: function (response) {
		                //thông báo xoá thành công bằng toastr
		                
		               // console.log(response);
		               $('#quan').empty();
		               $('#quan').append('<p style="color:black;">'+response.quan.quantity+'</p>')
		               $('#quantity').on('keyup', function(){
              			console.log($(this).val());
              			if (Number($(this).val()) <= Number(response.quan.quantity) && Number($(this).val())>0) { 

              			$(this).val();
              			//$(this).val()$(this).val(response.quan.quantity)); 
		              		}else if(Number($(this).val()) > Number(response.quan.quantity)) {
		              			$(this).val(response.quan.quantity);
		              		}else if(Number($(this).val())<0) {
		              			alert('invvalid');
		              		}
		              	});
		              },
		              error: function (error) {
		                
		              }
	   		});
	   })		 


</script>
   
@endsection