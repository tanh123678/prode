@extends('admin.layouts.new_master')

@section('content')
<section class="invoice">


	<button class="btn btn-success" data-toggle="modal" href='#modal-add-prod' id="add-btn">Add</button>
	<table class="table table-bordered" id="posts-table">
		<thead>
			<th>thumbnail</th>			
			<th>code</th>
			<th>name</th>
			<th>sale_price</th>
			<th>price</th>
			<th>description</th>
			<th>categories</th>
			<th>action</th>
		</thead>
	</table>


{{-- add --}}
		<div class="modal fade" id="modal-add-prod" >
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-body">
						
						<form action="" method="POST" id="addformprod" class="" role="form" enctype="multipart/form-data" file="true">
							{{ csrf_field() }}
							
								<div class="form-group">
									<legend>Add Product</legend>
								</div>

								<div class="form-group">
									
									<label class="control-label" for="tag">Code:</label>
									<input name="code" type="text" class="form-control" id="code" placeholder="" required>
									<span class="code-error" style="color: red;font-weight: bold"></span>
									<br>
									<label class="control-label" for="tag">Name:</label>
									<input name="name" type="text" class="form-control" id="name" placeholder="" required>
									<span class="name-error" style="color: red;font-weight: bold"></span>
									<br>
									<label class="control-label" for="tag">Sale_price:</label>
									<input name="sale_price" type="text" class="form-control" id="sale_price" placeholder="" required>
									<span style="color: red;font-weight: bold" class="sale_price-error"></span>
									<br>
									<label class="control-label" for="tag">price:</label>
									<input name="price" type="text" class="form-control" id="price" placeholder="" required>
									<span class="price-error" style="color: red;font-weight: bold"></span>
									<br>
									<label class="control-label" for="tag">Description:</label>
									{{-- <input name="description" type="text" class="form-control" id="description" placeholder="" > --}}<textarea name="description" class="form-control" id="description" cols="30" rows="10" required></textarea>
									<span class="des-error" style="color: red;font-weight: bold"></span>
									<br>


									<input type="file"  name="thumbnail[]" id="thumbnail-upload" multiple>
									<div id="preview"></div>
								</div>
							

							<button type="submit" class="btn btn-primary">Add</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</form>
					</div>

				</div>
			</div>
		</div>
		{{-- add prode--}}
		
{{-- end-add --}}
{{-- Modal show chi tiết todo --}}
		<div class="modal fade" id="prod-show">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Show Detail</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="text-align: center;">Code</th>
									<th style="text-align: center;">Name</th>
									<th style="text-align: center;">Sale price</th>
									<th style="text-align: center;">price</th>									
									<th style="text-align: center;">Description</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="code-show"></td>
									<td id="name-show"></td>
									<td id="sale-show"></td>
									<td id="price-show"></td>
									<td id="des-show"></td>								
								</tr>
							</tbody>
						</table>
					</div> 
					<!-- modalbody -->

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
{{-- Modal show chi tiết prodde --}}
		<div class="modal fade" id="prod-de-show">
					<div class="modal-dialog">
						<div class="modal-content" style="width: 892px">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">product detail</h4>
							</div>
							<div class="container" style="width: 100%; margin: auto;">
								<div class="row">
									<div class="col-md-8">
										
										<table class="table table-striped table-bordered table-hover" id="tableShow" style="width: 100%">
									      <thead>
									        <tr id="">									        	
									          <th class="stl-column color-column">quantity</th>
									          <th class="stl-column color-column">size</th>
									          <th class="stl-column color-column">color</th>
									          <th class="stl-column color-column">Hành động</th>
									        </tr> 
									      </thead>
								     	 	<tbody>
								     	 		<tr>
								     	 			
								     	 			<td id="id-show"></td>
													<td id="quan-show"></td>
													<td id="size-show"></td>
													<td id="color-show"></td>
														
								     	 		</tr>
								     	 	</tbody>
								    	</table>
									</div>
									<div class="col-md-4" >
										<input type="hidden" name="" id="prodeid" value="">
											<div id="formadd">
												<form action="" method="POST" id="addformprode" class="" role="form" >
												{{ csrf_field() }}
													<h3>Add</h3>
													<div class="form-group">
												
														
														<label class="control-label" for="tag">quantity:</label>
														<input name="quantity" type="text" class="form-control" id="quantity" placeholder="số lượng" required >
														<span class="quan-error" style="color: red;font-weight: bold"></span>
														<br>
														<label class="control-label" for="tag">size:</label>
														{{-- <input name="size" type="text" class="form-control" id="size" placeholder="" > --}}
														<br>
														
															{{-- <label><input type="checkbox" name="sizedetail[]" value="{{$size->id}}" id="sizedetail{{$size->id}}">{{$size->name}}&nbsp;</label> --}}
															<label ><select class="form-control">
																@foreach ($sizes as $size)
															    <option name="sizedetail[]" value="{{$size->id}}" id="sizedetail{{$size->id}}">{{$size->name}}&nbsp;</option>
															    @endforeach
															 </select></label>
														
														<br>
														<label class="control-label" for="tag">color:</label>
														<br>
														
															
															<label><select class="form-control">
															@foreach($colortable as $color)
															    <option name="colordetail[]" id="colordetail{{$color->id}}"  value="{{$color->id}}" class="color">{{$color->color}}&nbsp;</option>
															@endforeach
															</select></label>
														
													</div>
									

													<button type="submit" class="btn btn-primary">Add</button>
												</form>
											</div>
											
									</div>

								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
		</div>
{{-- Modal sửa product --}}

	<div class="modal fade" id="modal-edit-prod">
		<div class="modal-dialog">
			<div class="modal-content">

				<form action=""​ id="form-edit-prod" method="POST" role="form" >
					{{ csrf_field() }}

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit product</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="">Id</label>
							<input type="text" class="form-control" id="id-edit" placeholder="id" name="id" required> 
							<span class="id-edit-error" style="color: red;font-weight: bold"></span>
						</div>
						<div class="form-group">
							<label for="">Code</label>
							<input type="text" class="form-control" id="code-edit" placeholder="code" name="code" readonly>
							<span class="code-edit-error" style="color: red;font-weight: bold"></span>

						</div>
						<div class="form-group">
							<label for="">Tên</label>
							<input type="text" class="form-control" id="name-edit" placeholder="Name" name="name" required>
							<span class="name-edit-error" style="color: red;font-weight: bold"></span>

						</div>
						<div class="form-group">
							<label for="">Sale_price</label>
							<input type="text" class="form-control" id="Sale_price_edit" placeholder="sale_price" name="sale_price" required>
							<span class="sale_price-edit-error" style="color: red;font-weight: bold"></span>

						</div>
						<div class="form-group">
							<label for="">price</label>
							<input type="text" class="form-control" id="price_edit" placeholder="price" name="price" required>
							<span class="price-edit-error" style="color: red;font-weight: bold"></span>

						</div>
						<div class="form-group">
							<label class="control-label" >description:</label>
							<input   type="text" class="form-control" id="des-edit" placeholder="description" name="description" required>
							<span class="description-edit-error" style="color: red;font-weight: bold"></span>

						</div>
						<br>
						<input name="thumbnailedit[]" id="edit-upload"  type="file" multiple>
						<span class="thumbnail-error"></span>
						<div id="edit-preview"></div>

						<div class="append-img">
							<p>OLd Images</p>
						</div>
					</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Edit</button>

						</div>
				</form>
			</div>
		</div>
	</div>
	{{-- Modal sửa prode --}}
		<div class="modal fade" id="modal-edit-prode" style="z-index: '10';">
		<div class="modal-dialog">
			<div class="modal-content">

				<form action=""​ id="form-edit-prode" method="POST" role="form" >
					{{ csrf_field() }}
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit prode</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="hidden" class="form-control" id="idprode-edit" placeholder="id" name="id">
						</div>
						<div class="form-group">
							<label for="">quantity</label>
							<input type="text" class="form-control" id="quantity-edit" placeholder="quantity" name="quantity" required>
							<span class="quan-edit-error" style="color: red;font-weight: bold"></span>
						</div>
						
						<div class="form-group">
							<label for="">size</label>
							{{-- <input type="text" class="form-control" id="size-edit" placeholder="size" name="size"> --}}
							
						  		<label>
								<select class="form-control" id="size-detail" >
									
							    {{-- <option name="size" id="size-detail" value=""></option> --}}
							    
							  </select></label>
						  	
						</div>
						<div class="form-group">
							{{-- <label class="control-label" >color_id:</label>
							<input   type="text" class="form-control" id="color_id-edit" placeholder="color_id" name="color_id"> --}}
							<label >color</label>
							<label>
								<select class="form-control" id="color-detail">
							{{-- @foreach($colortable as $color)
							<option name="color" id="color-detail{{$color->id}}" value="{{$color->id}}">{{$color->color}}&nbsp;</option>
						  	@endforeach --}}
						  	 </select></label>
						</div>
					</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Edit</button>

						</div>
				</form>
			</div>
		</div>
	</div>
	{{-- end edit--}}
</section>
@endsection	
@section('footer')
<!-- ./wrapper -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('js/simple.money.format.js')}}"></script>
<script src="{{asset('js/jquery.masknumber.js')}}"></script>

	<script type="text/javascript">
   		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
      	});
      </script>
<script type="text/javascript">
	//product detail

	function showdetail(id){
	 	$('#prod-de-show').modal('show');
	 	// alert(id);
	 	
	 	$('#prodeid').val(id);
			 	var table = $('#tableShow').DataTable({
					  destroy: true,
				      processing: true,
				      serverSide: true,
				      // order: [],
				      // 
				      ordering: false,
				    
				      ajax: {

							url: '/admin/prode/' + id,
							
						},
				        pageLength: 30,
				        lengthMenu: [[30, 50, 100, 200, 500], [30, 50, 100, 200, 500]],
				        columns: [
				        {data: 'quantity', name: 'quantity'},			        
				        {data: 'size_id', name: 'size_id'}, 
				        {data: 'color_id', name: 'color_id'},
				        {data: 'action', name: 'action', orderable: false, searchable: false, 'class':'text-center'},
				        ]
				});
	}
	$('#addformprode').submit(function(event) {
      event.preventDefault();
		sizedetail =  $("option[name='sizedetail[]']:checked").val();
		  // alert(sizedetail);              
      	colordetail = $("option[name='colordetail[]']:checked").val();

      $.ajax({
        url: '/admin/addprode',
        type: 'post',

        data: {
	        product_id: $('#prodeid').val(),
	        quantity: $('#quantity').val(),
	        size_id: sizedetail,
	        color_id: colordetail,
	        _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new prode success!');
                  //ẩn modal add đi
                  $('#modal-add-prode').modal('hide');
                  $('#addformprode')[0].reset();
                  $('#tableShow').DataTable().ajax.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                  $('.quan-error').text(jqXHR.responseJSON.error.quantity);
                }

              });
    });

    $(document).on('click','.edit-prod-btn',function(e){
    	e.preventDefault();
    	// $('#formedit').modal('show');
    	// console.log('aaaa');
    	$('#modal-edit-prode').modal('show');
    	var id=$(this).attr('data-id');
    	 $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: '/admin/editprode/' + id,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#idprode-edit').val(response.data.id);
              $('#quantity-edit').val(response.data.quantity);
              $('#size-detail').html( '<option value="'+response.size.size_id+'">'+response.size.name+'</option>' );
              $('#color-detail').html( '<option value="'+response.color.color_id+'">'+response.color.name+'</option>' );

              // $('#size-detail').val(response.data.size_id);
              // $('#size-detail'+ response.data.size_id).prop('checked', 'checked').attr('disabled',true);
              // $('#color_id-edit').val(response.data.color_id);
              $('#color-detail'+ response.data.color_id).prop('checked', 'checked').attr('disabled',true);
            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
        });
	          
   	})
    $(document).on('submit','#form-edit-prode',function(e){
		        e.preventDefault();
		        

		        var id=$('#idprode-edit').val();
		        // console.log(id);
		        $.ajax({
		          //phương thức put
		          type: 'post',
		          url: '/admin/updateprode/' + id,
		          //lấy dữ liệu trong form
		          data: {
		            id: $('#idprode-edit').val(),
		            quantity: $('#quantity-edit').val(),
		            
		            _token: $('meta[name="csrf-token"]').attr('content'),		            
		          },

		          success: function (response) {
		             console.log('aaa');
		            //thông báo update thành công
		            toastr.success('edit prode success!')
		            //ẩn modal edit
		            $('#modal-edit-prode').modal('hide');
		            $('#addformprode')[0].reset();
                  	$('#tableShow').DataTable().ajax.reload();
		            
		          },
		          error: function (jqXHR, textStatus, errorThrown) {
		            //xử lý lỗi tại đây
                  $('.quan-edit-error').text(jqXHR.responseJSON.error.quantity);

		          }
		        })
	})    

	$(document).on('click','.del-prod-btn',function(e){
	    		e.preventDefault();
	          //lấy dữ liệu từ attribute data-url lưu vào biến url
	          var id=$(this).attr('data-id');

	          if (confirm("Are you sure?")){
	            $.ajax({
	              //phương thức delete
	              type: 'delete',
	              url: '/admin/delprode/' + id,
	              
	              success: function (response) {
	                //thông báo xoá thành công bằng toastr
	                toastr.warning('delete student success!')
	                
	                $('#tableShow').DataTable().ajax.reload();
	              },
	              error: function (error) {
	                
	              }
	            })
	          }
	})



	//endprode
	$(function(){
		$('#posts-table').DataTable({
			processing : true,
			serverSide: true,
			ajax:{
				type: 'post',
				url: '/admin/prod',

			},
			columns: [
			{ data: 'thumbnail', name: 'thumbnail' },         
            { data: 'code', name: 'code' },
            { data: 'name', name: 'name' },
            { data: 'sale_price', name: 'sale_price' },
            { data: 'price', name: 'price' },
            { data: 'description', name: 'description' },
            { data: 'id', name: 'id' },
            { data: 'action', name: 'action' }
        ]
		});
	}); 

	$('#addformprod').submit(function(event) {
      event.preventDefault();

       	var fd = new FormData();
      	var names = [];

        var thumbnail = $('#thumbnail-upload')[0].files; 
        
        for (var i = 0; i < thumbnail.length; i++) {
        	fd.append('thumbnail[]',thumbnail[i])
        }
        // fd.append('thumbnail[]',$('#thumbnail-upload')[0].files);
        fd.append('code',$('#code').val());
        fd.append('name',$('#name').val());

        fd.append('sale_price',$('#sale_price').val());
        fd.append('price',$('#price').val());
        fd.append('description',$('#description').val());
        fd.append('_token',$('meta[name="csrf-token"]').attr('content'));
   //      
      $.ajax({
        url: '/admin/product',
        type: 'post',
        contentType: false,
        processData: false,
        data: fd,
        success: function(response){
          toastr.success('Add new student success!');
                  //ẩn modal add đi
                  $('#modal-add-prod').modal('hide');
                  $('#code').val('');
                  $('#name').val('');
                  $('#sale_price').val('');
                  $('#price').val('');
                  $('#description').val('');
                  $('#posts-table').DataTable().ajax.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  $('.code-error').text(jqXHR.responseJSON.error.code);
                  $('.name-error').text(jqXHR.responseJSON.error.name);
                  $('.sale_price-error').text(jqXHR.responseJSON.error.sale_price);
                  $('.price-error').text(jqXHR.responseJSON.error.price);
                  $('.des-error').text(jqXHR.responseJSON.error.description);
                }

              });
    });

		    $('#sale_price','#Sale_price_edit','#price','#price_edit').maskNumber({

			  integer: true,
			  thousands: ','
			});
    // bắt sự kiện click vào nút show
    $(document).on('click','.show-btn',function(e){
    	e.preventDefault();
          // $('.show-btn').click(function () {
          	// console.log('asd');
              //hiện modal show lên
              $('#prod-show').modal('show');
          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var id=$(this).attr('data-id');
          $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: '/admin/product/' + id,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#code-show').text(response.data.code);
              $('#name-show').text(response.data.name);
              $('#sale-show').text(response.data.sale_price).simpleMoneyFormat();
              $('#price-show').text(response.data.price).simpleMoneyFormat();
              $('#des-show').text(response.data.description);

            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
          })
    })

    

	    $(document).on('click','.del-btn',function(e){
	    		e.preventDefault();
	          //lấy dữ liệu từ attribute data-url lưu vào biến url
	          var id=$(this).attr('data-id');

	          if (confirm("Are you sure?")){
	            $.ajax({
	              //phương thức delete
	              type: 'delete',
	              url: '/admin/product/' + id,
	              
	              success: function (response) {
	                //thông báo xoá thành công bằng toastr
	                toastr.warning('delete student success!')
	                // setTimeout(function () {
	                //   window.location.href="{{asset('admin/product')}}";
	                // },800);
	                $('#posts-table').DataTable().ajax.reload();
	              },
	              error: function (error) {
	                
	              }
	            })
	          }
	    })


        // edit

		//bắt sự kiện click vào nút edit
		$(document).on('click','.edit-btn',function(e){
				e.preventDefault();
				// console.log('aaaaa');
		        //mở modal edit lên
		        $('#modal-edit-prod').modal('show');
		        //lấy data-url của nút edit

		        var id=$(this).attr('data-id');
		        $.ajax({
		          //phương thức get
		          type: 'get',
		          url: "/admin/product/"+id+"/edit",
		          success: function (response) {
		            console.log(response);
		            //đưa dữ liệu controller gửi về điền vào input trong form edit.
		            $('#id-edit').val(response.data.id);
		            $('#code-edit').val(response.data.code);
		            $('#name-edit').val(response.data.name);
		            $('#Sale_price_edit').val(response.data.sale_price);
		            $('#price_edit').val(response.data.price);
		            $('#des-edit').val(response.data.description);
		            $('.append-img').html(response.img);
		          },
		          error: function (error) {
		            
		          }
		        });
		      })

	
		$(document).on('submit','#form-edit-prod',function(e){
		        e.preventDefault();
		        //lấy data-url của form edit
		        var id=$('#id-edit').val();
		        var thumbnailedit = $('#edit-upload')[0].files;
		        console.log(thumbnailedit);
		        var form_data = new FormData();

		        form_data.append('id', $('#id-edit').val());
		        form_data.append('code', $('#code-edit').val());
		        form_data.append('name', $('#name-edit').val());
		        form_data.append('sale_price', $('#Sale_price_edit').val());
		        form_data.append('price', $('#price_edit').val());
		        form_data.append('description', $('#des-edit').val());
		        // alert(thumbnailedit.length);
		         for (var i = 0; i < thumbnailedit.length; i++) {
		        	
					    form_data.append('thumbnailedit[]', thumbnailedit[i]);
					}
					
	         	form_data.append('id', id);
		        form_data.append('_token',$('meta[name="csrf-token"]').attr('content'));
		       
		        $.ajax({
		          //phương thức put
		          type: 'post',
		          url: "/admin/productupdate/"+id,
		          //lấy dữ liệu trong form
		          data: form_data,
		          contentType: false,
			      cache: false, 
			      processData: false,
		          success: function (response) {
		       
		            //thông báo update thành công
		            toastr.success('edit product success!')
		            //ẩn modal edit
		            $('#edit-upload').val('');
		            $('#edit-preview').text('');
		            $('#modal-edit-prod').modal('hide');

		            $('#posts-table').DataTable().ajax.reload();
		            
		          },
		          error: function (jqXHR, textStatus, errorThrown) {
		           	// $('.id-edit-error').text(jqXHR.responseJSON.error.id);
		            //xử lý lỗi tại đây
		           	$('.code-edit-error').text(jqXHR.responseJSON.error.code);
	                $('.name-edit-error').text(jqXHR.responseJSON.error.name);
	                $('.sale_price-edit-error').text(jqXHR.responseJSON.error.sale_price);
	                $('.price-edit-error').text(jqXHR.responseJSON.error.price);
	                // $('.thumbnail-errorr').text(jqXHR.responseJSON.error.thumbnail);
	                $('.description-edit-error').text(jqXHR.responseJSON.error.description);
		          }
		        })
		      })    


		$(document).ready(function () {

		    var navListItems = $('div.setup-panel div a'),
		            allWells = $('.setup-content'),
		            allNextBtn = $('.nextBtn');

		    allWells.hide();

		    navListItems.click(function (e) {
		        e.preventDefault();
		        var $target = $($(this).attr('href')),
		                $item = $(this);

		        if (!$item.hasClass('disabled')) {
		            navListItems.removeClass('btn-primary').addClass('btn-default');
		            $item.addClass('btn-primary');
		            allWells.hide();
		            $target.show();
		            $target.find('input:eq(0)').focus();
		        }
		    });

		    allNextBtn.click(function(){
		        var curStep = $(this).closest(".setup-content"),
		            curStepBtn = curStep.attr("id"),
		            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		            curInputs = curStep.find("input[type='text'],input[type='url']"),
		            isValid = true;

		        $(".form-group").removeClass("has-error");
		        for(var i=0; i<curInputs.length; i++){
		            if (!curInputs[i].validity.valid){
		                isValid = false;
		                $(curInputs[i]).closest(".form-group").addClass("has-error");
		            }
		        }

		        if (isValid)
		            nextStepWizard.removeAttr('disabled').trigger('click');
		    });

		    $('div.setup-panel div a.btn-primary').trigger('click');
		});
</script>
<script>
		function previewImages() {

		  var $preview = $('#preview').empty();
		  if (this.files) $.each(this.files, readAndPreview);

		  function readAndPreview(i, file) {
		    
		    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
		      return alert(file.name +" is not an image");
		    } // else...
		    
		    var reader = new FileReader();

		    $(reader).on("load", function() {
		      $preview.append($("<img/>", {src:this.result, height:100}));
		    });

		    reader.readAsDataURL(file);
		    
		  }

		}

		$('#thumbnail-upload').on("change", previewImages);
</script>


<script>
	function previewImagess() {

	  var $previeww = $('#edit-preview').empty();
	  if (this.files) $.each(this.files, readAndPreviews);

	  function readAndPreviews(i, file) {
	    
	    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
	      return alert(file.name +" is not an image");
	    } // else...
	    
	    var readerr = new FileReader();

	    $(readerr).on("load", function() {
	      $previeww.append($("<img/>", {src:this.result, height:100}));
	    });

	    readerr.readAsDataURL(file);
	    
	  }

	}

	$('#edit-upload').on("change", previewImagess);
</script>
@endsection