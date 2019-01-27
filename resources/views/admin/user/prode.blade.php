@extends('admin.layouts.new_master')

@section('content')
<section class="invoice">
	
	<button class="btn btn-success" data-toggle="modal" href='#modal-add-prod' id="tagbtn">Add</button>
	<table class="table table-bordered" id="prode-table">
		<thead>
			<th>product id</th>
			<th>quantity</th>
			<th>price</th>
			<th>size</th>
			<th>color_id</th>
			<th>action</th>
		</thead>
	</table>
</section>
@endsection
@section('footer')
<!-- ./wrapper -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('js/simple.money.format.js')}}"></script>
	<script type="text/javascript">
   		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
      	});
    </script>
    <script type="text/javascript">
    	$(function(){
			$('#prode-table').DataTable({
				processing : true,
				serverSide: true,
				ajax:{
					type: 'post',
					url: '/admin/prodet/',

				},
				columns: [
	            { data: 'product_id', name: 'product_id' },
	            { data: 'quantity', name: 'quantity' },
	            { data: 'price', name: 'price' },
	            { data: 'size', name: 'size' },
	            { data: 'color_id', name: 'color_id' },
	            { data: 'action', name: 'action' }
	        ]
			});
		});
    </script>	
    @endsection