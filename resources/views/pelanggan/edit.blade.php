<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
	<h2>Edit Data Costumer</h2>

	<form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="nama" class="form-control" value="{{$pelanggan->nama}}" required>
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="alamat" class="form-control" value="{{$pelanggan->alamat}}" required>
		</div>
		<div class="form-group">
			<label>Gender</label>
			<select name = "jenis_kelamin" class="form-control">
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input class="form-control" type="number" name="no_hp" value="{{$pelanggan->no_hp}}" required maxlength="12">
		</div>
		<button type="submit" class="btn btn-primary">
			Save
		</button>
		<a href="{{ route('pelanggan.index')}}" class="btn btn-primary">Back</a>
	</form>

</div>
</body>
</html>