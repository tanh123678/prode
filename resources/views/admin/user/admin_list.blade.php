@extends('admin.layouts.new_master')

@section('content')
<section class="invoice">

	{{-- @if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif --}}
	<div class="alert-success"></div>

		<button class="btn btn-success" data-toggle="modal" href='#modal-add-ad' id="tagbtn">Add</button>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>id</th>
						<th>Name</th>
						<th>email</th>
						<th>Created at</th>
						<th>Updated at</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					{{-- biến $todos được controller trả cho view
					chứa dữ liệu tất cả các bản ghi trong bảng todos. Dùng foreach để hiển
					thị từng bản ghi ra table này. --}}
					
					@foreach ($admins as $admin)
					<tr>
						<td>{{$admin->id}}</td>
						<td>{{$admin->name}}</td>
						{{-- <td><img src="{{ asset($post->thumbnail) }}" alt="" style="width: 110px;height: 100px;"></td> --}}
						<td>{{$admin->email}}</td>	

						<td>{{$admin->created_at->diffForHumans()}}</td>
						<td>{{$admin->updated_at->diffForHumans()}}</td>
						<td style="width: 150px;">
							{{-- <a style="display: inline-block; width: 67px;" class="btn btn-warning btn-edit" data-toggle="modal" href="#modal-edit" data-id="{{$post->id}}" >Edit</a> --}}

								{{-- <a  href="{{ route('detail.show',$post->id) }}" style="display: inline-block; width: 67px;" class="btn btn-info btn-show">Detail</a> --}}
								<a class="btn btn-primary btn-edit-ad" data-url="{{ route('ad.edit',$admin->id) }}"​ ><i class="fa fa-edit"></i></a>

								<a class="btn btn-info btn-show-ad" data-url="{{ route('ad.show',$admin->id) }}"​><i class="fa fa-eye"></i></a>

								<a class="btn btn-danger btn-delete-ad" data-url="{{ route('ad.destroy',$admin->id) }}"​ ><i class="fa fa-times"></i></a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$admins->Links()}}

			
{{-- ajax --}}
{{-- add --}}
<div class="modal fade" id="modal-add-ad">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-body">
						<form action="" method="POST" id="addformad" class="" role="form" data-url="">
							{{ csrf_field() }}
							<div class="form-group">
								<legend>Add Admin</legend>
							</div>

							<div class="form-group">
								
								<label class="control-label" for="tag">Tên:</label>
								<input name="name" required type="text" class="form-control" id="name" placeholder="Enter tag" value="{{old('name')}}">
								<span class="name-admin-error" style="color: red;font-weight: bold"></span>
								<br>
								<label class="control-label" for="tag">email:</label>
								<input name="email" required type="email" class="form-control" id="email" placeholder="Enter tag" value="{{old('email')}}">
								<span class="email-admin-error" style="color: red;font-weight: bold"></span>
								<br>
								<label class="control-label" for="tag">pass:</label>
								<input name="password" required type="password" class="form-control" id="password" placeholder="Enter tag" value="{{old('password')}}">
								<span class="password-admin-error" style="color: red;font-weight: bold"></span>
								<br>
							</div>
							

							<button type="submit" class="btn btn-primary">Add</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</form>
					</div>

				</div>
			</div>
		</div>
{{-- end-add --}}
 {{-- Modal show chi tiết todo --}}
				<div class="modal fade" id="ad-show">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Show Admin</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="text-align: center;">Name</th>
									<th style="text-align: center;">email</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td id="name-show"></td>
									<td id="slug-show"></td>
									
									
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

{{-- Modal sửa todo --}}

	<div class="modal fade" id="modal-edit-ad">
		<div class="modal-dialog">
			<div class="modal-content">

				<form action=""​ id="form-edit-ad" method="POST" role="form" >
					{{ csrf_field() }}

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit Admin</h4>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for="">Tên</label>
							<input type="text" class="form-control" id="name-edit" placeholder="Name" required>
							<span class="error-edit-name" style="color: red;font-weight: bold"></span>
						</div>
						<div class="form-group">
							<label class="control-label" >email:</label>
							<input  name="email" type="text" class="form-control" id="email-edit" placeholder="email" required>
							<span class="error-edit-email" style="color: red;font-weight: bold"></span>

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
</section>


@endsection