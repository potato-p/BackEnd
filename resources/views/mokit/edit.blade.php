<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
	<h2>Edit Data Model Kit</h2>

	<form action="{{ route('mokit.update', $mokit->id) }}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="nama" class="form-control" value="{{$mokit->nama}}" required>
		</div>
		<div class="form-group">
			<label>Grade</label>
			<select name = "grade" class="form-control">

				<option value="High Grade">High Grade</option>
				<option value="Real Grade">Real Grade</option>
				<option value="Master Grade">Master Grade</option>
				<option value="Perfect Grade">Perfect Grade</option>
				<option value="Hi-Resolution">Hi-Resolution</option>

				</select>
		</div>
		<div class="form-group">
			<label>Supplier</label>
			

			<select name = "supplier_id" class="form-control">
				<option value="{{$mokit->supplier_id}}">{{$mokit->supplier->nama}}</option>
				@foreach($supplier as $a)
				<option value="{{$a->id}}">{{$a->nama}}</option>
				@endforeach
			</select>

		</div>
		

		<button type="submit" class="btn btn-primary">
			Save
		</button>
		<a href="{{ route('mokit.index')}}" class="btn btn-primary">Back</a>
	</form>

</div>
</body>
</html>

