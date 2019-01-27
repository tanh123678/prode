@extends('admin.layouts.new_master')

@section('content')
<section class="invoice">


	<button class="btn btn-success" data-toggle="modal" href='#modal-add-prod' id="add-btn">Add</button>
	<table class="table table-bordered" id="posts-table">
		<thead>
			<th>id</th>
			<th>slug</th>
			<th>code</th>
			<th>name</th>
			<th>sale_price</th>
			<th>description</th>
			<th>action</th>
		</thead>
	</table>


{{-- add --}}
		<div class="modal fade" id="modal-add-prod" >
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-body">
						
						<form action="" method="POST" id="addformprod" class="" role="form" >
							{{ csrf_field() }}
							
								<div class="form-group">
									<legend>Add </legend>
								</div>

								<div class="form-group">
									
									<label class="control-label" for="tag">Code:</label>
									<input name="code" type="text" class="form-control" id="code" placeholder="">
									<label class="control-label" for="tag">Name:</label>
									<input name="name" type="text" class="form-control" id="name" placeholder="" >
									<label class="control-label" for="tag">Sale_price:</label>
									<input name="sale_price" type="text" class="form-control" id="sale_price" placeholder="">
									<label class="control-label" for="tag">Description:</label>
									<input name="description" type="text" class="form-control" id="description" placeholder="" >
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
						<h4 class="modal-title">Show tag</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="text-align: center;">Code</th>
									<th style="text-align: center;">Name</th>
									<th style="text-align: center;">Sale price</th>
									<th style="text-align: center;">Description</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="code-show"></td>
									<td id="name-show"></td>
									<td id="sale-show"></td>
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
									          <th class="stl-column color-column">price</th>
									          <th class="stl-column color-column">size</th>
									          <th class="stl-column color-column">color_id</th>
									          <th class="stl-column color-column">Hành động</th>
									        </tr> 
									      </thead>
								     	 	<tbody>
								     	 		<tr>
								     	 			
								     	 			<td id="id-show"></td>
													<td id="quan-show"></td>
													<td id="price-show"></td>
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
														<input name="quantity" type="text" class="form-control" id="quantity" placeholder="" >
														<label class="control-label" for="tag">price:</label>
														<input name="price" type="number" class="form-control" id="price" placeholder="">
														<label class="control-label" for="tag">size:</label>
														<input name="size" type="text" class="form-control" id="size" placeholder="" >
														<label class="control-label" for="tag">color_id:</label>
														<input name="color_id" type="text" class="form-control" id="color_id" placeholder="" >
											
													</div>
									

													<button type="submit" class="btn btn-primary">Add</button>
												</form>
											</div>
											<div id="formedit">
												<form action="" method="POST" id="addformprode" class="" role="form" >
												{{ csrf_field() }}
													<h3>Edit</h3>
													<div class="form-group">
												
														
														<label class="control-label" for="tag">quantity:</label>
														<input name="quantity" type="text" class="form-control" id="quantity-edit" placeholder="" >
														<label class="control-label" for="tag">price:</label>
														<input name="price" type="number" class="form-control" id="price-edit" placeholder="">
														<label class="control-label" for="tag">size:</label>
														<input name="size" type="text" class="form-control" id="size-edit" placeholder="" >
														<label class="control-label" for="tag">color_id:</label>
														<input name="color_id" type="text" class="form-control" id="color_id-edit" placeholder="" >
											
													</div>
									

													<button type="submit" class="btn btn-primary">Edit</button>
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
{{-- Modal sửa todo --}}

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
							<input type="text" class="form-control" id="id-edit" placeholder="id" name="id">
						</div>
						<div class="form-group">
							<label for="">Code</label>
							<input type="text" class="form-control" id="code-edit" placeholder="code" name="code">
						</div>
						<div class="form-group">
							<label for="">Tên</label>
							<input type="text" class="form-control" id="name-edit" placeholder="Name" name="name">
						</div>
						<div class="form-group">
							<label for="">Sale_price</label>
							<input type="text" class="form-control" id="Sale_price_edit" placeholder="sale_price" name="sale_price">
						</div>
						<div class="form-group">
							<label class="control-label" >description:</label>
							<input   type="text" class="form-control" id="des-edit" placeholder="description" name="description">
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
		<div class="modal fade" id="modal-edit-prode">
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
							<label for="">product_id</label>
							<input type="text" class="form-control" id="product_id-edit" placeholder="product_id" name="product_id">
						</div>
						<div class="form-group">
							<label for="">quantity</label>
							<input type="text" class="form-control" id="quantity-edit" placeholder="quantity" name="quantity">
						</div>
						<div class="form-group">
							<label for="">price</label>
							<input type="text" class="form-control" id="price-edit" placeholder="price" name="price">
						</div>
						<div class="form-group">
							<label for="">size</label>
							<input type="text" class="form-control" id="size-edit" placeholder="size" name="size">
						</div>
						<div class="form-group">
							<label class="control-label" >color_id:</label>
							<input   type="text" class="form-control" id="color_id-edit" placeholder="color_id" name="color_id">
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
				        {data: 'price', name: 'price' }, 				        
				        {data: 'size', name: 'size'},
				        {data: 'color_id', name: 'color_id'},
				        {data: 'action', name: 'action', orderable: false, searchable: false, 'class':'text-center'},
				        ]
				});
	}
	$('#addformprode').submit(function(event) {
      event.preventDefault();

      $.ajax({
        url: '/admin/addprode',
        type: 'post',

        data: {
	        product_id: $('#prodeid').val(),
	        quantity: $('#quantity').val(),
	        price: $('#price').val(), 
	        size: $('#size').val(),
	        color_id: $('#color_id').val(),
	        _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new student success!');
                  //ẩn modal add đi
                  $('#modal-add-prode').modal('hide');
                  $('#addformprode')[0].reset();
                  $('#tableShow').DataTable().ajax.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                }

              });
    });

    $(document).on('click','edit-prod-btn',function(e){
    	e.preventDefault();

    	var id=$(this).attr('data-id');
    	 $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: '/admin/editprode/' + id,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#quantity-edit').text(response.data.quantity);
              $('#price-edit').text(response.data.price).simpleMoneyFormat();
              $('#size-edit').text(response.data.size);
              $('#color_id-edit').text(response.data.color_id);

            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
        });
	          
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
            { data: 'id', name: 'id' },
            { data: 'slug', name: 'slug' },
            { data: 'code', name: 'code' },
            { data: 'name', name: 'name' },
            { data: 'sale_price', name: 'sale_price' },
            { data: 'description', name: 'description' },
            { data: 'action', name: 'action' }
        ]
		});
	}); 

	$('#addformprod').submit(function(event) {
      event.preventDefault();
      
    
      $.ajax({
        url: '/admin/product',
        type: 'post',

        data: {
	        code: $('#code').val(),
	        name: $('#name').val(),
	        sale_price: $('#sale_price').val(), 
	        description: $('#description').val(),
	        _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new student success!');
                  //ẩn modal add đi
                  $('#modal-add-prod').modal('hide');
                  $('#posts-table').DataTable().ajax.reload();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                }

              });
    });
		    $('#sale_price','#Sale_price_edit').maskNumber({

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
		            $('#des-edit').val(response.data.description);
		          },
		          error: function (error) {
		            
		          }
		        });
		      })
		$(document).on('submit','#form-edit-prod',function(e){
		        e.preventDefault();
		        //lấy data-url của form edit
		        var id=$('#id-edit').val();

		        $.ajax({
		          //phương thức put
		          type: 'put',
		          url: "/admin/product/"+id,
		          //lấy dữ liệu trong form
		          data: {
		          	id: $('#id-edit').val(),
		            code: $('#code-edit').val(),
		            name: $('#name-edit').val(),
		            sale_price: $('#Sale_price_edit').val(),
		            description: $('#des-edit').val(),
		            _token: $('meta[name="csrf-token"]').attr('content'),
		           
		            
		          },

		          success: function (response) {
		             console.log('aaa');
		            //thông báo update thành công
		            toastr.success('edit product success!')
		            //ẩn modal edit
		            $('#modal-edit-prod').modal('hide');
		            $('#posts-table').DataTable().ajax.reload();
		            
		          },
		          error: function (jqXHR, textStatus, errorThrown) {
		            //xử lý lỗi tại đây
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
@endsection