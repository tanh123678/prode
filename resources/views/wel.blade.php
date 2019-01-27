<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{asset('test')}}" method="post" id="store">
		@csrf
		<input type="text"  name="name" value="{{old('name')}}">
		<span class="error errorName">{{$errors->first('name')}}</span>
		<br>
		<input type="submit">
	</form>
	<!-- Latest compiled and minified CSS & JS -->
	
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script>
            $(document).on('submit', '#store', function(event) {
                event.preventDefault();
               var _this = $('#store');
               $.ajax({
                   url: '/test',
                   type: 'post',
                  dataType: 'json',
                   data: _this.serialize(),

                   success : function(response){

                   },
                   error : function(jqXHR,textStatus, errorThrow){
                     $('.errorName').text(jqXHR.responseJSON.errors.name[0]);
                   }
               })
             
              
               
            });

        </script>
</body>
</html>