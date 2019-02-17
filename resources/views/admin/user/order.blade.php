@extends('admin.layouts.new_master')
@section('content')
<section class="invoice">

	<div class="alert-success"></div>
		<div class="table-responsive" style="margin-top: 10px;">
			<table class="table table-hover" id="bill-table">
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Mobile</th>
            <th>address</th>
            <th>total</th>
						<th>Created at</th>
						<th>Updated at</th>
            <th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>  
</section>					
					

@endsection	
@section('footer')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
	$(function() {
                $('#bill-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                  type: 'post',
                  url: '/admin/order',
                  data:{
                     _token: $('meta[name="csrf-token"]').attr('content')
                  }

                },
                columns: [
                    { data: 'code', name: 'code' },
                    { data: 'name', name: 'name' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'address', name: 'address' },
                    { data: 'total', name: 'total' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action' }

                ]
            });
        });
</script>
@endsection