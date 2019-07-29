<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<h2>Add Costumer</h2>

		<form action="{{ route ('pelanggan.store') }}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="nama" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="alamat" class="form-control" required>
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
				<input type="text" name="no_hp" class="form-control" required maxlength="12">
			</div>
			<button type="submit" class="btn btn-primary">
				Add
			</button>
			<a href="{{ route('pelanggan.index')}}" class="btn btn-primary">Back</a>
		</form>
	</div>
		


</body>
</html>